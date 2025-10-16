<div wire:ignore.self class="modal fade" id="deletecvlargeModal " tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-4">
                        NIK
                    </div>
                    <div class="col-8">
                        : {{ $nik }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Nama Lengkap
                    </div>
                    <div class="col-8">
                        : {{ $namalengkap }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i> Close</button>
                <button wire:click="destroy" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Hapus</button>
            </div>

        </div>
    </div>