<div>
    <style>
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-bottom: none;
            padding: 1.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .section-title {
            color: #495057;
            font-weight: 600;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e9ecef;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            transition: all 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
        }

        .input-group-text {
            background-color: #f8f9fa;
            border-radius: 8px 0 0 8px;
            border: 1px solid #ced4da;
            border-right: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 500;
        }

        .is-invalid {
            border-color: #dc3545;
        }

        .text-danger {
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .form-control.text-uppercase {
            text-transform: uppercase;
        }
    </style>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mb-0"><i class="bi bi-person-plus me-2"></i>Form Tambah Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <!-- Vertical Form -->
                        <form wire:submit.="tambahkaryawan" class="row g-4">
                            <!-- Data Pribadi -->
                            <div class="form-section">
                                <h5 class="section-title"><i class="bi bi-person-vcard me-2"></i>Data Pribadi</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="no_ktp" class="form-label">Nomor Induk Kependudukan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                                            <input wire:model="no_ktp" type="text" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukkan No KTP">
                                        </div>
                                        @error('no_ktp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input wire:model="namalengkap" type="text" class="form-control text-uppercase @error('namalengkap') is-invalid @enderror" id="namalengkap" placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        @error('namalengkap')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Karyawan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email Karyawan">
                                        </div>
                                        @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                            <input wire:model="tempatlahir" type="text" class="form-control text-uppercase @error('tempatlahir') is-invalid @enderror" id="tempatlahir" placeholder="Masukkan Tempat Lahir">
                                        </div>
                                        @error('tempatlahir')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                            <input wire:model="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror">
                                        </div>
                                        @error('tanggallahir')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                                            <select wire:model="jeniskelamin" class="form-select @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin">
                                                <option selected value="">Pilih Jenis Kelamin</option>
                                                <option value="PRIA">Pria</option>
                                                <option value="WANITA">Wanita</option>
                                            </select>
                                        </div>
                                        @error('jeniskelamin')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-book"></i></span>
                                            <select wire:model="pendidikan" class="form-select @error('pendidikan') is-invalid @enderror" id="pendidikan">
                                                <option selected value="">Pilih Pendidikan</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SLTA">SLTA</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                        @error('pendidikan')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="agama" class="form-label">Agama</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-heart"></i></span>
                                            <select wire:model="agama" class="form-select @error('agama') is-invalid @enderror" id="agama">
                                                <option selected value="">Pilih Agama</option>
                                                <option value="MUSLIM">Islam</option>
                                                <option value="PROTESTAN">Protestan</option>
                                                <option value="KATOLIK">Katolik</option>
                                                <option value="HINDU">Hindu</option>
                                                <option value="BUDDHA">Buddha</option>
                                                <option value="KHONGHUCU">Khonghucu</option>
                                            </select>
                                        </div>
                                        @error('agama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="form-section">
                                <h5 class="section-title"><i class="bi bi-house me-2"></i>Alamat</h5>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="alamatktp" class="form-label">Alamat KTP</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                                            <input wire:model="alamatktp" type="text" class="form-control @error('alamatktp') is-invalid @enderror" id="alamatktp" placeholder="Masukkan Alamat KTP">
                                        </div>
                                        @error('alamatktp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="alamatdomisili" class="form-label">Alamat Domisili</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-house-check"></i></span>
                                            <input wire:model="alamatdomisili" type="text" class="form-control @error('alamatdomisili') is-invalid @enderror" id="alamatdomisili" placeholder="Masukkan Alamat Domisili">
                                        </div>
                                        @error('alamatdomisili')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Data Keuangan -->
                            <div class="form-section">
                                <h5 class="section-title"><i class="bi bi-wallet me-2"></i>Data Keuangan</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="npwp" class="form-label">NPWP</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-file-text"></i></span>
                                            <input wire:model="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" placeholder="Masukkan NPWP">
                                        </div>
                                        @error('npwp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="bank" class="form-label">Bank</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                            <select wire:model="bank" class="form-select @error('bank') is-invalid @enderror" id="bank">
                                                <option selected value="">Pilih Bank</option>
                                                <option value="BCA">BCA</option>
                                                <option value="BRI">BRI</option>
                                                <option value="BNI">BNI</option>
                                                <option value="MANDIRI">MANDIRI</option>
                                                <option value="DANAMON">DANAMON</option>
                                                <option value="CIMB NIAGA">CIMB NIAGA</option>
                                            </select>
                                        </div>
                                        @error('bank')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="norek" class="form-label">Nomor Rekening</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-credit-card-2-front"></i></span>
                                            <input wire:model="norek" type="number" class="form-control @error('norek') is-invalid @enderror" id="norek" placeholder="Masukkan Nomor Rekening">
                                        </div>
                                        @error('norek')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="bankaccount" class="form-label">Bank Account</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                            <input wire:model="bankaccount" type="text" class="form-control @error('bankaccount') is-invalid @enderror" id="bankaccount" placeholder="Masukkan Bank Account">
                                        </div>
                                        @error('bankaccount')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Data Karyawan -->
                            <div class="form-section">
                                <h5 class="section-title"><i class="bi bi-briefcase me-2"></i>Data Karyawan</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nik" class="form-label">Nomor Induk Karyawan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                            <input wire:model="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK">
                                        </div>
                                        @error('nik')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-diagram-3"></i></span>
                                            <select wire:model="jabatan" class="form-select @error('jabatan') is-invalid @enderror" id="jabatan">
                                                <option selected value="">Pilih Jabatan</option>
                                                <option value="OPERATOR">Operator</option>
                                                <option value="OPERATOR LEADER">Operator Leader</option>
                                                <option value="SUPERVISOR">Supervisor</option>
                                                <option value="SUPERINTENDENT">Superintendent</option>
                                                <option value="ASISTEN MANAGER">Asisten Manager</option>
                                                <option value="MANAGER">Manager</option>
                                                <option value="GENERAL MANAGER">General Manager</option>
                                                <option value="DIRECTUR">Directur</option>
                                            </select>
                                        </div>
                                        @error('jabatan')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-info-circle"></i></span>
                                            <select wire:model="status" class="form-select @error('status') is-invalid @enderror" id="status">
                                                <option selected value="">Pilih Status</option>
                                                <option value="PERMANENT">Permanent</option>
                                                <option value="PROBATION">Probation</option>
                                                <option value="OUTSOURCE">Outsource</option>
                                                <option value="TRAINEE">Trainee</option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tanggalbergabung" class="form-label">Tanggal Bergabung</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar-check"></i></span>
                                            <input wire:model="tanggalbergabung" type="date" class="form-control @error('tanggalbergabung') is-invalid @enderror" id="tanggalbergabung">
                                        </div>
                                        @error('tanggalbergabung')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary me-3"><i class="bi bi-check-lg me-2"></i>Submit</button>
                                <button wire:click="riset" type="reset" class="btn btn-secondary"><i class="bi bi-arrow-clockwise me-2"></i>Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @script
    <script>
        $wire.on('tambahkaryawanberhasil', () => {
            const notyf = new Notyf();

            notyf.success({
                message: 'Berhasil Menambahkan Karyawan',
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                },
            });
        });
    </script>
    @endscript


</div>