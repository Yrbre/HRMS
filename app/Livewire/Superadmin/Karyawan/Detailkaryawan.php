<?php

namespace App\Livewire\Superadmin\Karyawan;

use Livewire\Component;
use App\Models\employee;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Detailkaryawan extends Component
{
    use WithFileUploads;

    public $employee, $namalengkap, $nik, $jabdesc, $jkdesc, $deptdesc, $tglmasuk, $mk_thn, $mk_bln, $mk_hari, $gradedesc, $tempatlahir, $tgl_lahir, $cv, $old_cv, $karyawan_id;
    public $umurtahun, $umurbulan, $umurhari;
    public $jointahun, $joinbulan, $joinhari;
    public $gradeOptions = [];

    #[Layout('layouts.app')]
    public function mount($karyawan_id)
    {

        $employee = Employee::findOrFail($karyawan_id);
        $this->employee     = $employee;
        $this->karyawan_id  = $employee->id;
        $this->nik          = $employee->nik;
        $this->namalengkap  = $employee->namalengkap;
        $this->deptdesc     = $employee->deptdesc;
        $this->tglmasuk     = $employee->tglmasuk;
        $this->jabdesc      = $employee->jabdesc;
        $this->gradedesc    = $employee->gradedesc;
        $this->tempatlahir  = $employee->tempatlahir;
        $this->tgl_lahir    = $employee->tgl_lahir;
        $this->old_cv       = $employee->cv;
        if ($this->tgl_lahir) {
            // Ubah tanggal lahir menjadi objek Carbon
            $tanggalLahir = Carbon::parse($this->tgl_lahir);

            // Hitung selisihnya dengan hari ini
            $selisih = $tanggalLahir->diff(Carbon::now());

            // Simpan hasil perhitungan ke properti
            $this->umurtahun  = $selisih->y; // 'y' untuk Tahun (Year)
            $this->umurbulan  = $selisih->m; // 'm' untuk Bulan (Month)
            $this->umurhari = $selisih->d; // 'd' untuk Hari (Day)
        } else {
            // Jika karyawan tidak punya tgl_lahir
            $this->umurtahun  = 0;
            $this->umurbulan  = 0;
            $this->umurhari = 0;
        }

        if ($this->tglmasuk) {
            $tanggalMasuk = Carbon::parse($this->tglmasuk);

            $selisihJoin = $tanggalMasuk->diff(Carbon::now());

            $this->jointahun  = $selisihJoin->y;
            $this->joinbulan  = $selisihJoin->m;
            $this->joinhari = $selisihJoin->d;
        } else {
            $this->jointahun  = 0;
            $this->joinbulan  = 0;
            $this->joinhari = 0;
        }

        // 3. LOGIKA BARU UNTUK MENGHITUNG UMUR (Y, M, D)

    }
    public function render()
    {
        return view('livewire.superadmin.karyawan.detailkaryawan');
    }

    public  function goback()
    {

        return $this->redirect('/karyawan/index');
    }
    public function save()
    {


        $this->validate([
            'namalengkap' => 'nullable|string|max:40',
            'deptdesc'    => 'nullable|string|max:30',
            'tglmasuk'    => 'nullable|date',
            'jabdesc'     => 'nullable|string|max:50',
            'tempatlahir' => 'nullable|string|max:30',
            'tgl_lahir'   => 'nullable|date',
            'cv'          => 'nullable|file|mimes:pdf|max:4096',
        ]);

        try {
            // Menggunakan try-catch adalah praktik yang baik untuk menangani error tak terduga
            $employee = Employee::findOrFail($this->karyawan_id);
            $cvPath = $employee->cv;

            // 2. Proses file CV baru jika ada yang diunggah.
            if ($this->cv) {
                // Hapus file CV lama terlebih dahulu untuk menjaga kebersihan storage.
                if ($cvPath && Storage::disk('public')->exists($cvPath)) {
                    Storage::disk('public')->delete($cvPath);
                }

                // Buat nama file yang unik untuk menghindari konflik penamaan.
                // Menambahkan timestamp adalah cara yang bagus.
                $namaFile = Str::slug($this->nik . '_' . $this->namalengkap, '_') . '_' . time() . '.' . $this->cv->extension();

                // Simpan file baru dan dapatkan path-nya.
                $cvPath = $this->cv->storeAs('cv', $namaFile, 'public');
            }
            // 3. Update data karyawan di database.
            $employee->update([
                'namalengkap' => $this->namalengkap,
                'deptdesc'    => $this->deptdesc,
                'tglmasuk'    => $this->tglmasuk,
                'jabdesc'     => $this->jabdesc,
                'tempatlahir' => $this->tempatlahir,
                'tgl_lahir'   => $this->tgl_lahir,
                'cv'          => $cvPath,
            ]);

            // 4. Lakukan sinkronisasi state komponen setelah berhasil menyimpan.
            if ($this->tgl_lahir) {
                // Ubah tanggal lahir menjadi objek Carbon
                $tanggalLahir = Carbon::parse($this->tgl_lahir);

                // Hitung selisihnya dengan hari ini
                $selisih = $tanggalLahir->diff(Carbon::now());

                // Simpan hasil perhitungan ke properti
                $this->umurtahun  = $selisih->y; // 'y' untuk Tahun (Year)
                $this->umurbulan  = $selisih->m; // 'm' untuk Bulan (Month)
                $this->umurhari = $selisih->d; // 'd' untuk Hari (Day)
            } else {
                // Jika karyawan tidak punya tgl_lahir
                $this->umurtahun  = 0;
                $this->umurbulan  = 0;
                $this->umurhari = 0;
            }

            if ($this->tglmasuk) {
                $tanggalMasuk = Carbon::parse($this->tglmasuk);

                $selisihJoin = $tanggalMasuk->diff(Carbon::now());

                $this->jointahun  = $selisihJoin->y;
                $this->joinbulan  = $selisihJoin->m;
                $this->joinhari = $selisihJoin->d;
            } else {
                $this->jointahun  = 0;
                $this->joinbulan  = 0;
                $this->joinhari = 0;
            }


            $this->cv = null;

            $this->old_cv = $this->employee->cv;


            $this->dispatch('berhasilSimpanData');

            $this->employee->refresh();
        } catch (\Exception $e) {

            $this->dispatch('gagalSimpanData');
            Log::error('Gagal update karyawan: ' . $e->getMessage());
        }
    }


    public function deletecv()
    {

        if ($this->old_cv && Storage::disk('public')->exists($this->old_cv)) {
            Storage::disk('public')->delete($this->old_cv);
        }


        $this->employee->update(['cv' => null]);


        $this->old_cv = null;
        $this->employee->cv = null;


        $this->dispatch('notify-delete-cv');
    }
}
