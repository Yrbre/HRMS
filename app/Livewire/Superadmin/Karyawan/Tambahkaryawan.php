<?php

namespace App\Livewire\Superadmin\Karyawan;

use Livewire\Component;
use App\Models\Employee;

class Tambahkaryawan extends Component
{
    public $no_ktp, $namalengkap, $email, $tempatlahir, $tgl_lahir, $sexdesc, $pendidikan, $agama, $alamat_ktp, $alamat_domisili, $npwp, $bank, $bank_norek, $bank_account, $nik, $jabdesc, $jkdesc, $tglmasuk;
    public function render()
    {
        return view('livewire.superadmin.karyawan.tambahkaryawan');
    }

    public function tambahkaryawan()
    {
        $this->validate([
            'no_ktp'          => 'required|unique:employees,no_ktp',
            'namalengkap'     => 'required',
            'email'           => 'required|email|unique:employees,email',
            'tempatlahir'     => 'required',
            'tgl_lahir'       => 'required|date',
            'sexdesc'         => 'required',
            'pendidikan'      => 'required',
            'agama'           => 'required',
            'alamat_ktp'      => 'required',
            'alamat_domisili' => 'required',
            'npwp'            => 'nullable',
            'bank'            => 'required',
            'bank_norek'      => 'required',
            'bank_account'    => 'required',
            'nik'             => 'required|unique:employees,nik',
            'jabdesc'         => 'required',
            'jkdesc'          => 'required',
            'tglmasuk'        => 'required|date',
        ], [
            'no_ktp.required'          => 'No KTP wajib diisi.',
            'no_ktp.unique'            => 'No KTP sudah terdaftar.',
            'namalengkap.required'     => 'Nama Lengkap wajib diisi.',
            'email.required'           => 'Email wajib diisi.',
            'email.email'              => 'Format email tidak valid.',
            'email.unique'             => 'Email sudah terdaftar.',
            'tempatlahir.required'     => 'Tempat Lahir wajib diisi.',
            'tgl_lahir.required'       => 'Tanggal Lahir wajib diisi.',
            'tgl_lahir.date'           => 'Format Tanggal Lahir tidak valid.',
            'sexdesc.required'         => 'Jenis Kelamin wajib diisi.',
            'pendidikan.required'      => 'Pendidikan terakhir wajib diisi.',
            'agama.required'           => 'Agama wajib diisi.',
            'alamat_ktp.required'      => 'Alamat KTP wajib diisi.',
            'alamat_domisili.required' => 'Alamat Domisili wajib diisi.',
            'bank.required'            => 'Bank wajib diisi.',
            'bank_norek.required'      => 'No Rekening wajib diisi.',
            'bank_account.required'    => 'Nama Pemilik Rekening wajib diisi.',
            'nik.required'             => 'NIK wajib diisi.',
            'nik.unique'               => 'NIK sudah terdaftar.',
            'jabdesc.required'         => 'Jabatan wajib diisi.',
            'jkdesc.required'          => 'Status wajib diisi.',
            'tglmasuk.required'        => 'Tanggal Bergabung wajib diisi.',
            'tglmasuk.date'            => 'Format Tanggal Bergabung tidak valid.',
        ]);
        $employee                   = new Employee();
        $employee->no_ktp           = $this->no_ktp;
        $employee->namalengkap      = $this->namalengkap;
        $employee->email            = $this->email;
        $employee->tempatlahir      = $this->tempatlahir;
        $employee->tgl_lahir        = $this->tgl_lahir;
        $employee->sexdesc          = $this->sexdesc;
        $employee->pendidikan       = $this->pendidikan;
        $employee->agama            = $this->agama;
        $employee->alamat_ktp       = $this->alamat_ktp;
        $employee->alamat_domisili  = $this->alamat_domisili;
        $employee->npwp             = $this->npwp;
        $employee->bank             = $this->bank;
        $employee->bank_norek       = $this->bank_norek;
        $employee->bank_account     = $this->bank_account;
        $employee->nik              = $this->nik;
        $employee->jabdesc          = $this->jabdesc;
        $employee->jkdesc           = $this->jkdesc;
        $employee->tglmasuk         = $this->tglmasuk;


        $employee->save();
        $this->dispatch('tambahkaryawanberhasil');

        $this->resetValidation();
    }
    public function riset()
    {
        $this->resetValidation();
    }
}
