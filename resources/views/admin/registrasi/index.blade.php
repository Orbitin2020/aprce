@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-white">List Registration</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addSponsor" data-toggle="modal" data-target="#modalAddRegistration"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Registration</button>
            <table
                class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination TableUserRegistration">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">No</th>
                        <th class="text-center" style="width: 5%">Nama</th>
                        <th class="text-center" style="width: 5%">Email</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">No Telepon</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Create User Registration --}}
<div class="modal fade" id="modalAddRegistration" tabindex="-1" role="dialog" aria-labelledby="modalAddRegistration"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">User Registration</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_schedule" id="frm_schedule" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min="1"
                                placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="nama">Ticket</label>
                            <div class="s_speaker">
                                <select class="js-select2 form-control" name="tiket_id" id="tiket_id"
                                    style="width: 100%;">
                                    <option>Choose Ticket</option>
                                    @foreach($tiket as $tkt)
                                    <option value="{{ $tkt->id }}">{{ $tkt->participant }} - {{ $tkt->nm_tiket }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary saveBtn" disabled id="saveBtn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit User Registration --}}
<div class="modal fade" id="modalEditRegistration" tabindex="-1" role="dialog" aria-labelledby="modalEditRegistration"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Edit User Registration</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_schedule" id="frm_schedule" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="editNama" name="editNama"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="editEmail" name="editEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" id="editNohp" name="editNohp" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" id="editQuantity" name="editQuantity" min="1"
                                placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="nama">Ticket</label>
                            <div class="s_speaker">
                                <select class="js-select2 form-control" name="editTiket_id" id="editTiket_id"
                                    style="width: 100%;">
                                    <option>Choose Ticket</option>
                                    @foreach($tiket as $tkt)
                                    <option value="{{ $tkt->id }}">{{ $tkt->participant }} - {{ $tkt->nm_tiket }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary updateBtn" disabled id="updateBtn">
                    <i class="fa fa-check"></i> Update
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.registrasi.javascript')
@endpush