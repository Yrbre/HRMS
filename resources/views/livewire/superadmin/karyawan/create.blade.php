<div wire:ignore.self class="modal fade" id="createlargeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <label for="nama" class="form-label mt-2">Nama</label>
                    </div>
                    <div class="col-9">
                        <input wire:model="nama" type="text" class="form-control form-sm @error('nama')
                            is-invalid
                            @enderror" placeholder="Masukan Nama">
                        @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ri-close-fill"></i> Close</button>
                <button wire:click="store" type="button" class="btn btn-primary"><i class="ri-save-3-fill"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>