<div>
    <section class="section dashbaord">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card recent-seles overflow-auto">
                            <div class="card-body">
                                <div>
                                    <div class="col-sm-2">
                                        <select wire:model.live="paginate" class="form-select" aria-label="Default select example">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div></div>
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
                                            <th scope="col">Grade</th>
                                            <th scope="col">Working</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tanggal Masuk</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        @foreach ( $employee as $item)
                                        <tr>
                                            <td><small>{{ $loop->iteration }}</small></td>
                                            <td><img src="{{ asset('adminlte3/hrms/images/bod-&-boc-01.png') }}" height='40' class='rounded-circle' alt=""></td>
                                            <td><small>{{ $item->nik }}</td></small>
                                            <td><span class="badge rounded-pill bg-primary">{{ $item->namalengkap }}</span></td>
                                            <td><small>{{ $item->deptdesc }}</small></td>
                                            <td><small>{{ $item->jabdesc }}</small></td>
                                            <td><small>{{ $item->grade }}</small></td>
                                            <td><small>{{ $item->calgrp }}</small></td>
                                            <td><small>{{ $item->jkdesc }}</small></td>
                                            <td><small>{{ $item->tglmasuk }}</small></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bi bi-info-circle"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Modal -->
    @include('livewire.superadmin.merit.edit')
</div>