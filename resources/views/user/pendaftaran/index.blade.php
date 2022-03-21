@extends('layouts.app')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <button type="button" id="addRegister" data-toggle="modal" data-target="#modalRegister"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Register</button>
        </div>
    </div>
</div>

{{-- Modal Add Wilayah --}}
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegister" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Register</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_register" id="frm_register" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Full Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Phone</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Phone">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="saveBtn" class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('user.pendaftaran.javascript')
@endpush