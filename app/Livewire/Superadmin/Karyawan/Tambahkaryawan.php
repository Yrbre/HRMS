<?php

namespace App\Livewire\Superadmin\Karyawan;

use Livewire\Component;
use App\Models\employee;

class Tambahkaryawan extends Component
{
    public $no_ktp, $namalengkap, $email, $tempatlahir, $tanggallahir, $jeniskelamin, $pendidikan, $agama, $alamatktp, $alamatdomisili, $npwp, $bank, $norek, $bankaccount, $nik, $jabatan, $status, $tanggalbergabung;
    public function render()
    {
        return view('livewire.superadmin.karyawan.tambahkaryawan');
    }

    public function tambahkaryawan()
    {
        $this->validate([
            'no_ktp' => 'required',
            'namalengkap' => 'required',
            'email' => 'required|email',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'pendidikan'    => 'required',
            'agama' => 'required',
            'alamatktp' => 'required',
            'alamatdomisili' => 'required',
            'npwp' => 'required',
            'bank' => 'required',
            'norek' => 'required',
            'bankaccount' => 'required',
            'nik' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'tanggalbergabung' => 'required',
        ], [
            'no_ktp.required' => 'Nomor KTP wajib diisi',
            'namalengkap.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format Email tidak valid',
            'tempatlahir.required' => 'Tempat Lahir wajib diisi',
            'tanggallahir.required' => 'Tanggal Lahir wajib diisi',
            'jeniskelamin.required' => 'Jenis Kelamin wajib diisi',
            'pendidikan.required' => 'Pendidikan terakhir wajib diisi',
            'agama.required' => 'Agama wajib diisi',
            'alamatktp.required' => 'Alamat KTP wajib diisi',
            'alamatdomisili.required' => 'Alamat Domisili wajib diisi',
            'npwp.required' => 'NPWP wajib diisi',
            'bank.required' => 'Bank wajib diisi',
            'norek.required' => 'Nomor Rekening wajib diisi',
            'bankaccount.required' => 'Atas Nama Rekening wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'jabatan.required' => 'Jabatan wajib diisi',
            'status.required' => 'Status wajib diisi',
            'tanggalbergabung.required' => 'Tanggal Bergabung wajib diisi',
        ]);
        $employee = new employee();
        $employee->no_ktp = $this->no_ktp;
        $employee->namalengkap = $this->namalengkap;
        $employee->email = $this->email;
        $employee->tempatlahir = $this->tempatlahir;
        $employee->tanggallahir = $this->tanggallahir;
        $employee->jeniskelamin = $this->jeniskelamin;
        $employee->pendidikan = $this->pendidikan;
        $employee->agama = $this->agama;
        $employee->alamatktp = $this->alamatktp;
        $employee->alamatdomisili = $this->alamatdomisili;
        $employee->npwp = $this->npwp;
        $employee->bank = $this->bank;
        $employee->norek = $this->norek;
        $employee->bankaccount = $this->bankaccount;
        $employee->nik = $this->nik;
        $employee->jabatan = $this->jabatan;
        $employee->status = $this->status;
        $employee->tanggalbergabung = $this->tanggalbergabung;


        $employee->save();
        $this->dispatch('tambahkaryawanberhasil');
    }
    public function riset()
    {
        $this->resetValidation();
    }
}
