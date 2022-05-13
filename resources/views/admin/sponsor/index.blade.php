@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-white">List Sponsor</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addSponsor" data-toggle="modal" data-target="#modalSponsor"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Sponsor</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSponsor">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center" style="width: 5%">nama</th>
                        <th class="text-center" style="width: 5%">gambar</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Sponsor --}}
<div class="modal fade" id="modalSponsor" tabindex="-1" role="dialog" aria-labelledby="modalSponsor" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Sponsor</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_sponsor" id="frm_sponsor" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Sponsor">
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label class="" for="foto">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group ">
                                <img class="img-preview img-fluid mt-3 col-sm-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-primary" id="saveBtn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.sponsor.javascript')
@endpush