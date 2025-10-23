<?php

namespace App\Livewire\Superadmin\Karyawan;

use App\Models\Trainee;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Index extends Component
{




    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $nama, $nik, $namalengkap, $jkdesc, $jabdesc, $deptdesc, $id;




    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = [
            'title' => 'Data Karyawan',
            'employee' => Employee::where(function ($sql) {
                $sql->where('nik', 'like', '%' . $this->search . '%')
                    ->orWhere('namalengkap', 'like', '%' . $this->search . '%')
                    ->orWhere('deptcode', 'like', '%' . $this->search . '%')
                    ->orWhere('deptdesc', 'like', '%' . $this->search . '%');
            })
                ->whereNotNull('jabdesc')
                ->whereRaw("TRIM(jabdesc) != ''")
                ->orderBy('deptdesc', 'asc')
                ->paginate($this->paginate),
        ];

        return view('livewire.superadmin.karyawan.index', $data);
    }
    public function create()
    {

        return redirect()->route('superadmin.karyawan.tambahkaryawan');
    }

    public function store()
    {
        $this->validate(
            [
                'nama' => 'required'
            ],
            [
                'nama.required' => 'Nama Tidak Boleh Kosong'
            ]
        );
    }
    public function detail($id)
    {
        return redirect()->route('superadmin.karyawan.detailkaryawan', ['id' => $id]);
    }
    public function delete($id)
    {

        $employee = Employee::findOrFail($id);
        $this->id           = $employee->id;
        $this->nik          = $employee->nik;
        $this->namalengkap  = $employee->namalengkap;
        $this->jkdesc       = $employee->jkdesc;
        $this->deptdesc     = $employee->deptdesc;
        $this->jabdesc      = $employee->jabdesc;
    }

    public function destroykaryawan($id)
    {
        $karyawan = Employee::findOrFail($id);
        $karyawan->delete();

        $this->dispatch('CloseDeletekaryawanModal');
    }
}
