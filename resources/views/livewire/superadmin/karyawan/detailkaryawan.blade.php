<div>
    <div class="d-flex align-items-center">
        <button wire:click="goback" class="btn btn-primary btn-sm ms-auto"><i class="ri-arrow-go-back-line"></i> Back</button>
    </div>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('adminlte3/hrms/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <h2 class="text-center">{{ $employee->namalengkap }}</h3>
                            <small class="badge rounded-pill bg-primary  mt-1">{{ $employee->jabdesc }}</small>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 small fst-italic fw-bold ">Nomor Induk Karyawan</div>
                                    <div class="col-lg-8 col-md-8 label">: {{$employee->nik}} <small class="badge bg-info text-uppercase">{{ $employee->jkdesc }}</small></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 small fst-italic fw-bold">Department</div>
                                    <div class="col-lg-8 col-md-8 label">: {{$employee->deptdesc}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 small fst-italic fw-bold">Joint Date</div>
                                    <div class="col-lg-8 col-md-8 label">: {{$employee->tglmasuk}} | {{ $employee->mk_thn }} Tahun | {{ $employee->mk_bln }} Bulan | {{ $employee->mk_hari }} Hari</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 small fst-italic fw-bold">Jabatan & Grade</div>
                                    <div class="col-lg-8 col-md-8 label">: {{ $employee->jabdesc }} ( {{ $employee->gradedesc }} )</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 small fst-italic fw-bold">Tempat & Tanggal Lahir</div>
                                    <div class="col-lg-8 col-md-8 label">: {{ $employee->tempatlahir }} {{ $employee->tgl_lahir }} | {{ $employee->umur_thn }} Tahun, {{ $employee->umur_bln }} Bulan, {{ $employee->umur_hari}} Hari</div>
                                </div>



                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form wire:submit.="save" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="namalengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="namalengkap" type="text" class="form-control form-sm @error('namalengkap')
                            is-invalid
                            @enderror" placeholder="Masukan Nama Lengkap">
                                            @error('namalengkap')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="deptdesc" class="col-md-4 col-lg-3 col-form-label">Department</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="deptdesc" type="text" class="form-control form-sm @error('deptdesc')
                            is-invalid
                            @enderror" placeholder="Masukan Deparment">
                                            @error('deptdesc')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="tglmasuk" class="col-md-4 col-lg-3 col-form-label">Joint Date</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="tglmasuk" type="date" class="form-control form-sm @error('tglmasuk')
                            is-invalid
                            @enderror" placeholder="Masukan Tanggal masuk">
                                            @error('tglmasuk')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="jabdesc" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select wire:model="jabdesc" id="jabdesc" class="form-select form-sm @error('jabdesc') is-invalid @enderror">
                                                <option value="">-- Pilih Jabatan --</option>
                                                <option value="OPERATOR">Operator</option>
                                                <option value="OPERATOR LEADER">Operator Leader</option>
                                                <option value="SUPERVISOR">Supervisor</option>
                                                <option value="SUPERINTENDENT">Superintendent</option>
                                                <option value="ASSISTANT MANAGER">Assistant Manager</option>
                                                <option value="MANAGER">Manager</option>
                                                <option value="GENERAL MANAGER">General Manager</option>
                                                <option value="DIRECOR">Direktur</option>
                                            </select>

                                            @error('jabdesc')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="row mb-3">
                                        <label for="tempatlahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="tempatlahir" type="text" class="form-control form-sm @error('tempatlahir')
                            is-invalid
                            @enderror" placeholder="Masukan Tempat Lahir">
                                            @error('tempatlahir')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="tgl_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="tgl_lahir" type="date" class="form-control form-sm @error('tgl_lahir')
                            is-invalid
                            @enderror" placeholder="Masukan Nama Lengkap">
                                            @error('tgl_lahir')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="cv" class="col-md-4 col-lg-3 col-form-label">Curriculum Vitae</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input wire:model="cv" type="file" class="form-control form-sm @error('cv')
                            is-invalid
                            @enderror">
                                            @error('cv')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>

                                    @if ($old_cv)
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $old_cv) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                            Lihat CV
                                        </a>

                                    </div>
                                    <div class="mt-2">
                                        <button wire:click="deletecv" wire:confirm="Anda yakin menghapus data CV?" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletecvlargeModal"><i class="bi bi-trash"></i> Hapus CV</button>
                                    </div>
                                    @endif





                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-2" wire:loading.attr="disabled" wire:target="cv">

                                            <span wire:loading wire:target="cv">
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Uploading...
                                            </span>


                                            <span wire:loading.remove wire:target="cv">
                                                Save Changes
                                            </span>
                                        </button>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">

                                <!-- Settings Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                <label class="form-check-label" for="changesMade">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                <label class="form-check-label" for="newProducts">
                                                    Information on new products and services
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="proOffers">
                                                <label class="form-check-label" for="proOffers">
                                                    Marketing and promo offers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                <label class="form-check-label" for="securityNotify">
                                                    Security alerts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End settings Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('livewire.superadmin.karyawan.deletecv')

    @script
    <script>
        $wire.on('notify-delete-cv', () => {
            const notyf = new Notyf({
                types: [{
                    type: 'info',
                    background: 'red',
                    icon: false,
                    position: {
                        x: 'right',
                        y: 'top',
                    },
                }]
            });

            notyf.open({
                type: 'info',
                message: 'CV berhasil dihapus.'
            });
        });
    </script>
    @endscript
    @script
    <script>
        $wire.on('berhasilSimpanData', () => {
            const notyf = new Notyf();

            notyf.success({
                message: 'Berhasil memperbarui data!',
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                },
            });
        });
    </script>
    @endscript
    @script
    <script>
        $wire.on('gagalSimpanData', () => {
            const notyf = new Notyf({
                types: [{
                    type: 'info',
                    background: 'red',
                    icon: false,
                    position: {
                        x: 'right',
                        y: 'top',
                    },
                }]
            });

            notyf.open({
                type: 'info',
                message: 'CV berhasil dihapus.'
            });
        });
    </script>
    @endscript



</div>