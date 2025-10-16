<div wire:ignore.self class="modal fade" id="createlargeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="nik" class="form-label mt-2"><i class="ri-slack-fill"></i> NIK</label>
                <div>
                    <input wire:model="nik" type="text" class="form-control form-sm @error('nik')
                            is-invalid
                            @enderror" placeholder="Masukan NIK">
                    @error('nik')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <label for="namalengkap" class="form-label"><i class="ri-slack-fill"></i> Nama</label>
                <div>
                    <input wire:model="namalengkap" type="text" class="form-control form-sm @error('namalengkap')
                            is-invalid
                            @enderror" placeholder="Masukan Nama Lengkap">
                    @error('namalengkap')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>




                <label for="deptdesc" class="form-label mt-2"><i class="ri-slack-fill"></i> Department</label>
                <div>
                    <input wire:model="deptdesc" type="text" class="form-control form-sm @error('deptdesc')
                            is-invalid
                            @enderror" placeholder="Masukan Deptartment">
                    @error('deptdesc')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <label for="jabdesc" class="form-label mt-2"><i class="ri-slack-fill"></i> Jabatan</label>
                <div>
                    <input wire:model="jabdesc" type="text" class="form-control form-sm @error('jabdesc')
                            is-invalid
                            @enderror" placeholder="Masukan Jabatan">
                    @error('jabdesc')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <div class="row">
                    <label for="tr_orientasi" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Orientasi</label>
                    <div class="col-4">
                        <input wire:model="tr_orientasi" type="date" class="form-control form-sm @error('tr_orientasi')
                            is-invalid
                            @enderror">
                        @error('tr_orientasi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_orientasi" type="text" class="form-control form-sm @error('trdesc_orientasi')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Orientasi">
                        @error('trdesc_orientasi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_refreshing_course" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Refreshing Course</label>
                    <div class="col-4">
                        <input wire:model="tr_refreshing_course" type="date" class="form-control form-sm @error('tr_refreshingcourse')
                            is-invalid
                            @enderror">
                        @error('tr_refreshing_course')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_refreshing_course" type="text" class="form-control form-sm @error('trdesc_refreshing_course')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Refreshing Course">
                        @error('trdesc_refreshing_course')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_qcdasar" class="form-label mt-2"><i class="ri-slack-fill"></i> Training QC Dasar</label>
                    <div class="col-4">
                        <input wire:model="tr_qcdasar" type="date" class="form-control form-sm @error('tr_qcdasar')
                            is-invalid
                            @enderror">
                        @error('tr_qcdasar')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_qcdasar" type="text" class="form-control form-sm @error('trdesc_qcdasar')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training QC Dasar">
                        @error('trdesc_qcdasar')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_qcmenengah" class="form-label mt-2"><i class="ri-slack-fill"></i> Training QC Menengah</label>
                    <div class="col-4">
                        <input wire:model="tr_qcmenengah" type="date" class="form-control form-sm @error('tr_qcmenengah')
                            is-invalid
                            @enderror">
                        @error('tr_qcmenengah')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_qcmenengah" type="text" class="form-control form-sm @error('trdesc_qcmenengah')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training QC Menengah">
                        @error('trdesc_qcmenengah')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_qclanjut" class="form-label mt-2"><i class="ri-slack-fill"></i> Training QC Lanjut</label>
                    <div class="col-4">
                        <input wire:model="tr_qclanjut" type="date" class="form-control form-sm @error('tr_qclanjut')
                            is-invalid
                            @enderror">
                        @error('tr_qclanjut')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_qclanjut" type="text" class="form-control form-sm @error('trdesc_qclanjut')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training QC Lanjut">
                        @error('trdesc_qclanjut')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_proses" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Proses</label>
                    <div class="col-4">
                        <input wire:model="tr_proses" type="date" class="form-control form-sm @error('tr_proses')
                            is-invalid
                            @enderror">
                        @error('tr_proses')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_proses" type="text" class="form-control form-sm @error('trdesc_proses')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Proses">
                        @error('trdesc_proses')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_trainer" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Trainer</label>
                    <div class="col-4">
                        <input wire:model="tr_trainer" type="date" class="form-control form-sm @error('tr_trainer')
                            is-invalid
                            @enderror">
                        @error('tr_trainer')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_trainer" type="text" class="form-control form-sm @error('trdesc_trainer')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Trainer">
                        @error('trdesc_trainer')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_lingkungan" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Lingkungan</label>
                    <div class="col-4">
                        <input wire:model="tr_lingkungan" type="date" class="form-control form-sm @error('tr_lingkungan')
                            is-invalid
                            @enderror">
                        @error('tr_lingkungan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_lingkungan" type="text" class="form-control form-sm @error('trdesc_lingkungan')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Lingkungan">
                        @error('trdesc_lingkungan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_insidentil" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Insidentil</label>
                    <div class="col-4">
                        <input wire:model="tr_insidentil" type="date" class="form-control form-sm @error('tr_insidentil')
                            is-invalid
                            @enderror">
                        @error('tr_insidentil')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_insidentil" type="text" class="form-control form-sm @error('trdesc_insidentil')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Insidentil">
                        @error('trdesc_insidentil')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_p3k" class="form-label mt-2"><i class="ri-slack-fill"></i> Training P3K</label>
                    <div class="col-4">
                        <input wire:model="tr_p3k" type="date" class="form-control form-sm @error('tr_p3k')
                            is-invalid
                            @enderror">
                        @error('tr_p3k')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_p3k" type="text" class="form-control form-sm @error('trdesc_p3k')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training P3K">
                        @error('trdesc_p3k')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_smk3" class="form-label mt-2"><i class="ri-slack-fill"></i> Training SMK3</label>
                    <div class="col-4">
                        <input wire:model="tr_smk3" type="date" class="form-control form-sm @error('tr_smk3')
                            is-invalid
                            @enderror">
                        @error('tr_smk3')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_smk3" type="text" class="form-control form-sm @error('trdesc_smk3')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training SMK3">
                        @error('trdesc_smk3')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_radioaktif" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Radio Aktif</label>
                    <div class="col-4">
                        <input wire:model="tr_radioaktif" type="date" class="form-control form-sm @error('tr_radioaktif')
                            is-invalid
                            @enderror">
                        @error('tr_radioaktif')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_radioaktif" type="text" class="form-control form-sm @error('trdesc_radioaktif')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Radio Aktif">
                        @error('trdesc_radioaktif')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_sio" class="form-label mt-2"><i class="ri-slack-fill"></i> Training SIO</label>
                    <div class="col-4">
                        <input wire:model="tr_sio" type="date" class="form-control form-sm @error('tr_sio')
                            is-invalid
                            @enderror">
                        @error('tr_sio')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_sio" type="text" class="form-control form-sm @error('trdesc_sio')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training SIO">
                        @error('trdesc_sio')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_iso" class="form-label mt-2"><i class="ri-slack-fill"></i> Training ISO</label>
                    <div class="col-4">
                        <input wire:model="tr_iso" type="date" class="form-control form-sm @error('tr_iso')
                            is-invalid
                            @enderror">
                        @error('tr_iso')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_iso" type="text" class="form-control form-sm @error('trdesc_iso')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training ISO">
                        @error('trdesc_iso')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_sjh" class="form-label mt-2"><i class="ri-slack-fill"></i> Training SJH</label>
                    <div class="col-4">
                        <input wire:model="tr_sjh" type="date" class="form-control form-sm @error('tr_sjh')
                            is-invalid
                            @enderror">
                        @error('tr_sjh')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_sjh" type="text" class="form-control form-sm @error('trdesc_sjh')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training SJH">
                        @error('trdesc_sjh')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>


                <div class="row">
                    <label for="tr_apar" class="form-label mt-2"><i class="ri-slack-fill"></i> Training Apar</label>
                    <div class="col-4">
                        <input wire:model="tr_apar" type="date" class="form-control form-sm @error('tr_apar')
                            is-invalid
                            @enderror">
                        @error('tr_apar')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-8">
                        <input wire:model="trdesc_apar" type="text" class="form-control form-sm @error('trdesc_apar')
                            is-invalid
                            @enderror" placeholder="Deskripsi Training Apar">
                        @error('trdesc_apar')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i> Close</button>
                <button wire:click="store" type="button" class="btn btn-primary"><i class="ri-save-3-fill"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>