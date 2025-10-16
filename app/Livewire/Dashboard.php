<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $totalKaryawan, $totalPermanent, $totalOutsource, $totalProbation, $totalTrainee, $totalOthers, $totalProperTahun;
    public $dataTotal = [];
    public $dataPermanent = [];
    public $dataOutsource = [];
    public $selectedYear;
    public $availableYears = [];
    public $countA1; // count(nik) where umur_thn = 56
    public $countA2; // count(nik) where umur_thn < 50
    public $countA3; // count(nik) where umur_thn between 50 and 54
    public $countA4; // count(nik) where umur_thn = 57
    public $countA5; // count(nik) where umur_thn = 55
    public $countA6; // count(nik) where umur_thn > 57
    public $chartData = [];

    // Properti publik untuk menyimpan hasil hitungan
    public $countU2; // Umur 57
    public $countU3; // Umur 56
    public $countU4; // Umur 55
    public $countU5; // Umur 50-54
    public function mount()
    {
        $this->totalKaryawan = Employee::count();
        $this->totalPermanent = Employee::where('jkdesc', 'Permanent')->count();
        $this->totalOutsource = Employee::where('jkdesc', 'Outsource')->count();
        $this->totalProbation = Employee::where('jkdesc', 'Probation')->count();
        $this->totalTrainee = Employee::where('jkdesc', 'Trainee')->count();
        $this->totalOthers = Employee::whereNotIn('jkdesc', ['Permanent', 'Outsource', 'Probation', 'Trainee'])->count();


        $firstYear = Employee::select(DB::raw('YEAR(tglmasuk) as year'))
            ->orderBy('year', 'asc')
            ->first()
            ->year ?? date('Y');

        // Buat rentang tahun dari yang paling baru ke paling lama
        $this->availableYears = range(date('Y'), $firstYear);

        // [BARU] Set tahun terpilih default ke tahun sekarang
        $this->selectedYear = date('Y');

        // [BARU] Panggil method untuk memuat data chart awal
        $this->loadChartData();

        // Hitungan untuk chart donut
        // Menggunakan query builder langsung untuk fleksibilitas
        $umur_cdonut = DB::raw('TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE())');

        // Kueri A1: Umur = 56
        $countA1 = DB::table('employees')->where($umur_cdonut, 56)->count('nik');

        // Kueri A2: Umur < 50 (Produktif)
        $countA2 = DB::table('employees')->where($umur_cdonut, '<', 50)->count('nik');

        // Kueri A3: Umur 50-54 (MPP)
        $countA3 = DB::table('employees')->whereBetween($umur_cdonut, [50, 54])->count('nik');

        // Kueri A4: Umur = 57 (Pensiun)
        $countA4 = DB::table('employees')->where($umur_cdonut, 57)->count('nik');

        // Kueri A5: Umur = 55 (Y-1)
        $countA5 = DB::table('employees')->where($umur_cdonut, 55)->count('nik');

        // Kueri A6: Umur > 57 (Pensiun Lanjut)
        $countA6 = DB::table('employees')->where($umur_cdonut, '>', 57)->count('nik');

        // Memformat data untuk ECharts
        $this->chartData = [
            ['value' => $countA3, 'name' => 'MPP'],
            ['value' => $countA2, 'name' => 'Produktif'],
            ['value' => $countA5, 'name' => 'Y-1'],
            ['value' => $countA1, 'name' => 'Y-2'],
            ['value' => $countA4, 'name' => 'Pensiun'],
            ['value' => $countA6, 'name' => 'Pensiun Lanjut'],
        ];

        // Inisialisasi hitungan untuk umur tertentu
        // Basis kueri untuk semua hitungan umur
        $umur_col = DB::raw('TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE())');

        // Kueri Dasar: Selalu filter status 'Permanent'
        $baseQuery = DB::table('employees')
            ->where('jkdesc', 'Permanent');

        // Kueri U2: Umur = 57
        $this->countU2 = (clone $baseQuery)
            ->where($umur_col, 57)
            ->count('nik');

        // Kueri U3: Umur = 56
        $this->countU3 = (clone $baseQuery)
            ->where($umur_col, 56)
            ->count('nik');

        // Kueri U4: Umur = 55
        $this->countU4 = (clone $baseQuery)
            ->where($umur_col, 55)
            ->count('nik');

        // Kueri U5: Umur antara 50 dan 54
        // Fungsi whereBetween dapat digunakan langsung pada kolom yang di-DB::raw()
        $this->countU5 = (clone $baseQuery)
            ->whereBetween($umur_col, [50, 54])
            ->count('nik');
    }

    // [BARU] Method ini akan dijalankan otomatis setiap kali $selectedYear berubah
    public function updatedSelectedYear()
    {
        $this->loadChartData();
    }

    // [BARU] Logika query chart dipisahkan ke method sendiri
    public function loadChartData()
    {
        // Query menggunakan tahun yang dipilih dari properti $this->selectedYear
        $dataPermanentDB = Employee::where('jkdesc', 'Permanent')
            ->whereYear('tglmasuk', $this->selectedYear)
            ->selectRaw('MONTH(tglmasuk) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->all();

        $dataOutsourceDB = Employee::where('jkdesc', 'Outsource')
            ->whereYear('tglmasuk', $this->selectedYear)
            ->selectRaw('MONTH(tglmasuk) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->all();

        // Siapkan array template
        $chartDataPermanent = array_fill(1, 12, 0);
        $chartDataOutsource = array_fill(1, 12, 0);
        $chartDataTotal = array_fill(1, 12, 0);

        // Isi template dengan data dari DB
        foreach ($dataPermanentDB as $bulan => $total) {
            $chartDataPermanent[$bulan] = $total;
        }
        foreach ($dataOutsourceDB as $bulan => $total) {
            $chartDataOutsource[$bulan] = $total;
        }
        for ($i = 1; $i <= 12; $i++) {
            $chartDataTotal[$i] = $chartDataPermanent[$i] + $chartDataOutsource[$i];
        }

        // Simpan hasil ke properti publik
        $this->dataTotal = array_values($chartDataTotal);
        $this->dataPermanent = array_values($chartDataPermanent);
        $this->dataOutsource = array_values($chartDataOutsource);

        // [BARU] Kirim event ke browser untuk memberitahu chart agar update
        $this->dispatch('updateChart', [
            'dataTotal' => $this->dataTotal,
            'dataPermanent' => $this->dataPermanent,
            'dataOutsource' => $this->dataOutsource,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
