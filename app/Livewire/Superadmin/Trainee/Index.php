<?php

namespace App\Livewire\Superadmin\Trainee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Trainee;
use Livewire\WithPagination;


class Index extends Component
{

    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $nik, $namalengkap, $deptdesc, $jabdesc, $tr_orientasi, $trdesc_orientasi, $tr_refreshing_course, $trdesc_refreshing_course, $tr_qcdasar, $trdesc_qcdasar, $tr_qcmenengah, $trdesc_qcmenengah, $tr_qclanjut, $trdesc_qclanjut, $tr_proses, $trdesc_proses, $tr_trainer, $trdesc_trainer, $tr_lingkungan, $trdesc_lingkungan, $tr_insidentil, $trdesc_insidentil, $tr_p3k, $trdesc_p3k, $tr_smk3, $trdesc_smk3, $tr_radioaktif, $trdesc_radioaktif, $tr_sio, $trdesc_sio, $tr_iso, $trdesc_iso, $tr_sjh, $trdesc_sjh, $tr_apar, $trdesc_apar, $jumlahtraining, $id_training, $employee_id;



    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $data = [
            'title' => 'Data Trainee',
            'employees' => Employee::with('trainee')
                ->where(function ($sql) {
                    $sql->where('nik', 'like', '%' . $this->search . '%')
                        ->orWhere('namalengkap', 'like', '%' . $this->search . '%')
                        ->orWhere('deptcode', 'like', '%' . $this->search . '%')
                        ->orWhere('deptdesc', 'like', '%' . $this->search . '%');
                })
                ->whereNotNull('jabdesc')
                ->whereRaw("TRIM(jabdesc) != ''")
                ->orderBy('deptdesc', 'asc')
                ->orderBy('namalengkap', 'asc')
                ->paginate($this->paginate),
        ];


        return view('livewire.superadmin.trainee.index', $data);
    }
    public function edit($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);

        $this->employee_id                          = $employee->id;
        $this->namalengkap                          = $employee->namalengkap;
        $this->nik                                  = $employee->nik;
        $this->deptdesc                             = $employee->deptdesc;
        $this->jabdesc                              = $employee->jabdesc;

        // mencari data trainee berdasarkan employee_id
        $trainee                                    = $employee->trainee;
        $this->tr_orientasi                         = $trainee ? $trainee->tr_orientasi : null;
        $this->trdesc_orientasi                     = $trainee ? $trainee->trdesc_orientasi : null;
        $this->tr_refreshing_course                 = $trainee ? $trainee->tr_refreshing_course : null;
        $this->trdesc_refreshing_course             = $trainee ? $trainee->trdesc_refreshing_course : null;
        $this->tr_qcdasar                           = $trainee ? $trainee->tr_qcdasar : null;
        $this->trdesc_qcdasar                       = $trainee ? $trainee->trdesc_qcdasar : null;
        $this->tr_qcmenengah                        = $trainee ? $trainee->tr_qcmenengah : null;
        $this->trdesc_qcmenengah                    = $trainee ? $trainee->trdesc_qcmenengah : null;
        $this->tr_qclanjut                          = $trainee ? $trainee->tr_qclanjut : null;
        $this->trdesc_qclanjut                      = $trainee ? $trainee->trdesc_qclanjut : null;
        $this->tr_proses                            = $trainee ? $trainee->tr_proses : null;
        $this->trdesc_proses                        = $trainee ? $trainee->trdesc_proses : null;
        $this->tr_trainer                           = $trainee ? $trainee->tr_trainer : null;
        $this->trdesc_trainer                       = $trainee ? $trainee->trdesc_trainer : null;
        $this->tr_lingkungan                        = $trainee ? $trainee->tr_lingkungan : null;
        $this->trdesc_lingkungan                    = $trainee ? $trainee->trdesc_lingkungan : null;
        $this->tr_insidentil                        = $trainee ? $trainee->tr_insidentil : null;
        $this->trdesc_insidentil                    = $trainee ? $trainee->trdesc_insidentil : null;
        $this->tr_p3k                               = $trainee ? $trainee->tr_p3k : null;
        $this->trdesc_p3k                           = $trainee ? $trainee->trdesc_p3k : null;
        $this->tr_smk3                              = $trainee ? $trainee->tr_smk3 : null;
        $this->trdesc_smk3                          = $trainee ? $trainee->trdesc_smk3 : null;
        $this->tr_radioaktif                        = $trainee ? $trainee->tr_radioaktif : null;
        $this->trdesc_radioaktif                    = $trainee ? $trainee->trdesc_radioaktif : null;
        $this->tr_sio                               = $trainee ? $trainee->tr_sio : null;
        $this->trdesc_sio                           = $trainee ? $trainee->trdesc_sio : null;
        $this->tr_iso                               = $trainee ? $trainee->tr_iso : null;
        $this->trdesc_iso                           = $trainee ? $trainee->trdesc_iso : null;
        $this->tr_sjh                               = $trainee ? $trainee->tr_sjh : null;
        $this->trdesc_sjh                           = $trainee ? $trainee->trdesc_sjh : null;
        $this->tr_apar                              = $trainee ? $trainee->tr_apar : null;
        $this->trdesc_apar                          = $trainee ? $trainee->trdesc_apar : null;
    }




    public function create()
    {
        $this->resetValidation();
        $this->reset([
            'namalengkap',
            'nik',
            'deptdesc',
            'jabdesc',
            'tr_orientasi',
            'trdesc_orientasi',
            'tr_refreshing_course',
            'trdesc_refreshing_course',
            'tr_qcdasar',
            'trdesc_qcdasar',
            'tr_qcmenengah',
            'trdesc_qcmenengah',
            'tr_qclanjut',
            'trdesc_qclanjut',
            'tr_proses',
            'trdesc_proses',
            'tr_trainer',
            'trdesc_trainer',
            'tr_lingkungan',
            'trdesc_lingkungan',
            'tr_insidentil',
            'trdesc_insidentil',
            'tr_p3k',
            'trdesc_p3k',
            'tr_smk3',
            'trdesc_smk3',
            'tr_radioaktif',
            'trdesc_radioaktif',
            'tr_sio',
            'trdesc_sio',
            'tr_iso',
            'trdesc_iso',
            'tr_sjh',
            'trdesc_sjh',
            'tr_apar',
            'trdesc_apar',
        ]);
    }

    public function store()
    {
        $this->validate(
            [
                'namalengkap'                   => 'required',
                'nik'                           => 'required|unique:trainees,nik',
                'deptdesc'                      => 'required',
                'jabdesc'                       => 'required',
                'tr_orientasi'                  => 'nullable',
                'trdesc_orientasi'              => 'nullable',
                'tr_refreshing_course'          => 'nullable',
                'trdesc_refreshing_course'      => 'nullable',
                'tr_qcdasar'                    => 'nullable',
                'trdesc_qcdasar'                => 'nullable',
                'tr_qcmenengah'                 => 'nullable',
                'trdesc_qcmenengah'             => 'nullable',
                'tr_qclanjut'                   => 'nullable',
                'trdesc_qclanjut'               => 'nullable',
                'tr_proses'                     => 'nullable',
                'trdesc_proses'                 => 'nullable',
                'tr_trainer'                    => 'nullable',
                'trdesc_trainer'                => 'nullable',
                'tr_lingkungan'                 => 'nullable',
                'trdesc_lingkungan'             => 'nullable',
                'tr_insidentil'                 => 'nullable',
                'trdesc_insidentil'             => 'nullable',
                'tr_p3k'                        => 'nullable',
                'trdesc_p3k'                    => 'nullable',
                'tr_smk3'                       => 'nullable',
                'trdesc_smk3'                   => 'nullable',
                'tr_radioaktif'                 => 'nullable',
                'trdesc_radioaktif'             => 'nullable',
                'tr_sio'                        => 'nullable',
                'trdesc_sio'                    => 'nullable',
                'tr_iso'                        => 'nullable',
                'trdesc_iso'                    => 'nullable',
                'tr_sjh'                        => 'nullable',
                'trdesc_sjh'                    => 'nullable',
                'tr_apar'                       => 'nullable',
                'trdesc_apar'                   => 'nullable',
            ],
            [
                'namalengkap.required'          => 'Nama Tidak Boleh Kosong',
                'nik.required'                  => 'NIK Tidak Boleh Kosong',
                'nik.unique'                    => 'NIK sudah terdaftar',
                'deptdesc.required'             => 'Department Tidak Boleh Kosong',
                'jabdesc.required'              => 'Jabatan Tidak Boleh Kosong',

            ]
        );
        $karyawan                               = new Trainee;
        $karyawan->namalengkap                  = $this->namalengkap;
        $karyawan->nik                          = $this->nik;
        $karyawan->deptdesc                     = $this->deptdesc;
        $karyawan->jabdesc                      = $this->jabdesc;
        $karyawan->tr_orientasi                 = $this->tr_orientasi;
        $karyawan->trdesc_orientasi             = $this->trdesc_orientasi;
        $karyawan->tr_refreshing_course         = $this->tr_refreshing_course;
        $karyawan->trdesc_refreshing_course     = $this->trdesc_refreshing_course;
        $karyawan->tr_qcdasar                   = $this->tr_qcdasar;
        $karyawan->trdesc_qcdasar               = $this->trdesc_qcdasar;
        $karyawan->tr_qcmenengah                = $this->tr_qcmenengah;
        $karyawan->trdesc_qcmenengah            = $this->trdesc_qcmenengah;
        $karyawan->tr_qclanjut                  = $this->tr_qclanjut;
        $karyawan->trdesc_qclanjut              = $this->trdesc_qclanjut;
        $karyawan->tr_proses                    = $this->tr_proses;
        $karyawan->trdesc_proses                = $this->trdesc_proses;
        $karyawan->tr_trainer                   = $this->tr_trainer;
        $karyawan->trdesc_trainer               = $this->trdesc_trainer;
        $karyawan->tr_lingkungan                = $this->tr_lingkungan;
        $karyawan->trdesc_lingkungan            = $this->trdesc_lingkungan;
        $karyawan->tr_insidentil                = $this->tr_insidentil;
        $karyawan->trdesc_insidentil            = $this->trdesc_insidentil;
        $karyawan->tr_p3k                       = $this->tr_p3k;
        $karyawan->trdesc_p3k                   = $this->trdesc_p3k;
        $karyawan->tr_smk3                      = $this->tr_smk3;
        $karyawan->trdesc_smk3                  = $this->trdesc_smk3;
        $karyawan->tr_radioaktif                = $this->tr_radioaktif;
        $karyawan->trdesc_radioaktif            = $this->trdesc_radioaktif;
        $karyawan->tr_sio                       = $this->tr_sio;
        $karyawan->trdesc_sio                   = $this->trdesc_sio;
        $karyawan->tr_iso                       = $this->tr_iso;
        $karyawan->trdesc_iso                   = $this->trdesc_iso;
        $karyawan->tr_sjh                       = $this->tr_sjh;
        $karyawan->trdesc_sjh                   = $this->trdesc_sjh;
        $karyawan->tr_apar                      = $this->tr_apar;
        $karyawan->trdesc_apar                  = $this->trdesc_apar;

        $karyawan->save();

        $this->dispatch('CloseCreateModal');
    }
    public function update()
    {
        Trainee::updateOrCreate(
            ['employee_id'  => $this->employee_id],
            [
                'nik'                           => $this->nik,
                'namalengkap'                   => $this->namalengkap,
                'deptdesc'                      => $this->deptdesc,
                'jabdesc'                       => $this->jabdesc,
                'tr_orientasi'                  => $this->tr_orientasi === '' ? null : $this->tr_orientasi,
                'trdesc_orientasi'              => $this->trdesc_orientasi === '' ? null : $this->trdesc_orientasi,
                'tr_refreshing_course'          => $this->tr_refreshing_course === '' ? null : $this->tr_refreshing_course,
                'trdesc_refreshing_course'      => $this->trdesc_refreshing_course  === '' ? null : $this->trdesc_refreshing_course,
                'tr_qcdasar'                    => $this->tr_qcdasar === '' ? null : $this->tr_qcdasar,
                'trdesc_qcdasar'                => $this->trdesc_qcdasar === '' ? null : $this->trdesc_qcdasar,
                'tr_qcmenengah'                 => $this->tr_qcmenengah === '' ? null : $this->tr_qcmenengah,
                'trdesc_qcmenengah'             => $this->trdesc_qcmenengah === '' ? null : $this->trdesc_qcmenengah,
                'tr_qclanjut'                   => $this->tr_qclanjut === '' ? null : $this->tr_qclanjut,
                'trdesc_qclanjut'               => $this->trdesc_qclanjut === '' ? null : $this->trdesc_qclanjut,
                'tr_proses'                     => $this->tr_proses  === '' ? null : $this->tr_proses,
                'trdesc_proses'                 => $this->trdesc_proses === '' ? null : $this->trdesc_proses,
                'tr_trainer'                    => $this->tr_trainer === '' ? null : $this->tr_trainer,
                'trdesc_trainer'                => $this->trdesc_trainer === '' ? null : $this->trdesc_trainer,
                'tr_lingkungan'                 => $this->tr_lingkungan === '' ? null : $this->tr_lingkungan,
                'trdesc_lingkungan'             => $this->trdesc_lingkungan === '' ? null : $this->trdesc_lingkungan,
                'tr_insidentil'                 => $this->tr_insidentil === '' ? null : $this->tr_insidentil,
                'trdesc_insidentil'             => $this->trdesc_insidentil === '' ? null : $this->trdesc_insidentil,
                'tr_p3k'                        => $this->tr_p3k === '' ? null : $this->tr_p3k,
                'trdesc_p3k'                    => $this->trdesc_p3k === '' ? null : $this->trdesc_p3k,
                'tr_smk3'                       => $this->tr_smk3 === '' ? null : $this->tr_smk3,
                'trdesc_smk3'                   => $this->trdesc_smk3 === '' ? null : $this->trdesc_smk3,
                'tr_radioaktif'                 => $this->tr_radioaktif === '' ? null : $this->tr_radioaktif,
                'trdesc_radioaktif'             => $this->trdesc_radioaktif === '' ? null : $this->trdesc_radioaktif,
                'tr_sio'                        => $this->tr_sio === '' ? null : $this->tr_sio,
                'trdesc_sio'                    => $this->trdesc_sio === '' ? null : $this->trdesc_sio,
                'tr_iso'                        => $this->tr_iso === '' ? null : $this->tr_iso,
                'trdesc_iso'                    => $this->trdesc_iso === '' ? null : $this->trdesc_iso,
                'tr_sjh'                        => $this->tr_sjh === '' ? null : $this->tr_sjh,
                'trdesc_sjh'                    => $this->trdesc_sjh === '' ? null : $this->trdesc_sjh,
                'tr_apar'                       => $this->tr_apar === '' ? null : $this->tr_apar,
                'trdesc_apar'                   => $this->trdesc_apar === '' ? null : $this->trdesc_apar,
            ]
        );
        $this->dispatch('CloseEditModal');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->employee_id = null;
        $this->namalengkap = null;
        $this->nik = null;
        $this->deptdesc = null;
        $this->jabdesc = null;
        $this->tr_orientasi = null;
        $this->trdesc_orientasi = null;
        $this->tr_refreshing_course = null;
        $this->trdesc_refreshing_course = null;
        $this->tr_qcdasar = null;
        $this->trdesc_qcdasar = null;
        $this->tr_qcmenengah = null;
        $this->trdesc_qcmenengah = null;
        $this->tr_qclanjut = null;
        $this->trdesc_qclanjut = null;
        $this->tr_proses = null;
        $this->trdesc_proses = null;
        $this->tr_trainer = null;
        $this->trdesc_trainer = null;
        $this->tr_lingkungan = null;
        $this->trdesc_lingkungan = null;
        $this->tr_insidentil = null;
        $this->trdesc_insidentil = null;
        $this->tr_p3k = null;
        $this->trdesc_p3k = null;
        $this->tr_smk3 = null;
        $this->trdesc_smk3 = null;
        $this->tr_radioaktif = null;
        $this->trdesc_radioaktif = null;
        $this->tr_sio = null;
        $this->trdesc_sio = null;
        $this->tr_iso = null;
        $this->trdesc_iso = null;
        $this->tr_sjh = null;
        $this->trdesc_sjh = null;
        $this->tr_apar = null;
        $this->trdesc_apar = null;
    }
    public function delete($id)
    {
        $karyawan = Trainee::findOrFail($id);
        $this->id_training                      = $karyawan->id;
        $this->namalengkap                      = $karyawan->namalengkap;
        $this->nik                              = $karyawan->nik;
        $this->deptdesc                         = $karyawan->deptdesc;
        $this->jabdesc                          = $karyawan->jabdesc;
        $this->tr_orientasi                     = $karyawan->tr_orientasi;
        $this->trdesc_orientasi                 = $karyawan->trdesc_orientasi;
        $this->tr_refreshing_course             = $karyawan->tr_refreshing_course;
        $this->trdesc_refreshing_course         = $karyawan->trdesc_refreshing_course;
        $this->tr_qcdasar                       = $karyawan->tr_qcdasar;
        $this->trdesc_qcdasar                   = $karyawan->trdesc_qcdasar;
        $this->tr_qcmenengah                    = $karyawan->tr_qcmenengah;
        $this->trdesc_qcmenengah                = $karyawan->trdesc_qcmenengah;
        $this->tr_qclanjut                      = $karyawan->tr_qclanjut;
        $this->trdesc_qclanjut                  = $karyawan->trdesc_qclanjut;
        $this->tr_proses                        = $karyawan->tr_proses;
        $this->trdesc_proses                    = $karyawan->trdesc_proses;
        $this->tr_trainer                       = $karyawan->tr_trainer;
        $this->trdesc_trainer                   = $karyawan->trdesc_trainer;
        $this->tr_lingkungan                    = $karyawan->tr_lingkungan;
        $this->trdesc_lingkungan                = $karyawan->trdesc_lingkungan;
        $this->tr_insidentil                    = $karyawan->tr_insidentil;
        $this->trdesc_insidentil                = $karyawan->trdesc_insidentil;
        $this->tr_p3k                           = $karyawan->tr_p3k;
        $this->trdesc_p3k                       = $karyawan->trdesc_p3k;
        $this->tr_smk3                          = $karyawan->tr_smk3;
        $this->trdesc_smk3                      = $karyawan->trdesc_smk3;
        $this->tr_radioaktif                    = $karyawan->tr_radioaktif;
        $this->trdesc_radioaktif                = $karyawan->trdesc_radioaktif;
        $this->tr_sio                           = $karyawan->tr_sio;
        $this->trdesc_sio                       = $karyawan->trdesc_sio;
        $this->tr_iso                           = $karyawan->tr_iso;
        $this->trdesc_iso                       = $karyawan->trdesc_iso;
        $this->tr_sjh                           = $karyawan->tr_sjh;
        $this->trdesc_sjh                       = $karyawan->trdesc_sjh;
        $this->tr_apar                          = $karyawan->tr_apar;
        $this->trdesc_apar                      = $karyawan->trdesc_apar;
        $this->jumlahtraining                   =
            collect([
                $karyawan->tr_orientasi,
                $karyawan->tr_refreshing_course,
                $karyawan->tr_qcdasar,
                $karyawan->tr_qcmenengah,
                $karyawan->tr_qclanjut,
                $karyawan->tr_proses,
                $karyawan->tr_trainer,
                $karyawan->tr_lingkungan,
                $karyawan->tr_insidentil,
                $karyawan->tr_p3k,
                $karyawan->tr_smk3,
                $karyawan->tr_radioaktif,
                $karyawan->tr_sio,
                $karyawan->tr_iso,
                $karyawan->tr_sjh,
                $karyawan->tr_apar,

            ])->filter()->count();
    }
    public function destroy($id)
    {
        $karyawan = Trainee::findOrFail($id);
        $karyawan->delete();

        $this->dispatch('CloseDeleteModal');
    }
}
