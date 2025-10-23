<div wire:ignore.self class="modal fade" id="deletekaryawanlargeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete {{$title}}</h5>
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


                <div class="row">
                    <div class="col-4">
                        Jabatan
                    </div>
                    <div class="col-8">
                        : {{ $jabdesc }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        Department
                    </div>
                    <div class="col-8">
                        : {{ $deptdesc }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        Status
                    </div>
                    <div class="col-8">
                        : {{ $jkdesc }}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i> Close</button>
                    <button wire:click="destroykaryawan({{ $id }})" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Hapus</button>
                </div>
            </div>
        </div>
    </div>