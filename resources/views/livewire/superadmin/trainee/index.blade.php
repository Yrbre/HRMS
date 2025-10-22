<div>

    <section class="section dashbaord">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card recent-seles overflow-auto">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="col-sm-2">
                                        <select wire:model.live="paginate" class="form-select" aria-label="Default select example">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>

                                    <div class="col-4">
                                        <input wire:model.live="search" type="text" class="form-control" placeholder="Search...">
                                    </div>
                                </div>


                                <table class="table table-hover table-sm" cellspacing="0" width="200%">
                                    <thead class="thead-light font-weight-bold text-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Nama Karyawan</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Jumlah Training</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        @foreach ( $employees as $item)
                                        <tr>
                                            <td><small>{{ $loop->iteration }}</small></td>
                                            <td><img src="{{ asset('hrms/images/bod-&-boc-01.png') }}" height='40' class='rounded-circle' alt=""></td>
                                            <td><small>{{ $item->nik }}</td></small>
                                            <td><span class="badge rounded-pill bg-primary">{{ $item->namalengkap }}</span></td>
                                            <td><small>{{ $item->deptdesc }}</small></td>
                                            <td><small>{{ $item->jabdesc }}</small></td>
                                            <td>
                                                <small>
                                                    @if ($item->trainee)
                                                    {{
                                                        collect([
                                                        $item->trainee->tr_orientasi,
                                                        $item->trainee->tr_refreshing_course,
                                                        $item->trainee->tr_qcdasar,
                                                        $item->trainee->tr_qcmenengah,
                                                        $item->trainee->tr_qclanjut,
                                                        $item->trainee->tr_proses,
                                                        $item->trainee->tr_trainer,
                                                        $item->trainee->tr_lingkungan,
                                                        $item->trainee->tr_insidentil,
                                                        $item->trainee->tr_p3k,
                                                        $item->trainee->tr_smk3,
                                                        $item->trainee->tr_radioaktif,
                                                        $item->trainee->tr_sio,
                                                        $item->trainee->tr_iso,
                                                        $item->trainee->tr_sjh,
                                                        $item->trainee->tr_apar,

                                                        ])->filter()->count()
                                                         }}
                                                    @else
                                                    0
                                                    @endif
                                                </small>
                                            </td>
                                            <td>
                                                <button wire:click="edit({{ $item->id }})" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editlargeModal"><i class="bi bi-info-circle"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $employees->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Modal -->
    @include('livewire.superadmin.trainee.edit')
    <!-- Edit Modal -->

    <!-- Close Edit Modal -->
    @script
    <script>
        $wire.on('CloseEditModal', () => {
            $('#editlargeModal').modal('hide');
            const notyf = new Notyf({
                types: [{
                    type: 'info',
                    background: '#ff9100ff',
                    icon: false,
                    position: {
                        x: 'right',
                        y: 'top',
                    },
                }]
            });

            notyf.open({
                type: 'info',
                message: 'Berhasil Update Data Training'
            });
        });
    </script>
    @endscript

    <!-- Close Edit Modal -->



    <!-- Create Modal -->
    @include('livewire.superadmin.trainee.create')
    <!-- Create Modal -->

    <!-- Close Create Modal -->
    @script
    <script>
        $wire.on('CloseCreateModal', () => {
            $('#createlargeModal').modal('hide');
            const notyf = new Notyf();

            notyf.success({
                message: 'Data Berhasil ditambahkan',
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                },
            });
        });
    </script>
    @endscript
    <!-- Close Create Modal -->

    <!-- Delete Modal -->
    @include('livewire.superadmin.trainee.delete')
    <!-- Delete Modal -->

    <!-- Close Delete Modal -->
    @script
    <script>
        $wire.on('CloseDeleteModal', () => {
            $('#daletelargeModal').modal('hide');
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
                message: 'Data Training Berhasil Dihapus'
            });
        });
    </script>
    @endscript

    <!-- Close Delete Modal -->





</div>