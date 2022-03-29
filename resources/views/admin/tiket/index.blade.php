@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Tiket</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addTiket" data-toggle="modal" data-target="#modalTiket"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Tiket</button>
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableTiket">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center" style="width: 5%">nama</th>
                        <th class="text-center">harga</th>
                        <th class="text-center">kategori</th>
                        <th class="text-center">participant</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Tiket --}}
<div class="modal fade" id="modalTiket" tabindex="-1" role="dialog" aria-labelledby="modalTiket" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tiket</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_tiket" id="frm_tiket" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Tiket">
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Tiket">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <div class="">
                                <select class="js-select2 form-control" name="kategori" id="kategori" style="width: 100%;" data-placeholder="Choose one">
                                    <option value=""></option>
                                    <option value="offline">offline</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="online">online</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Participant</label>
                            <div class="">
                                <select class="js-select2 form-control" name="participant" id="participant" style="width: 100%;" data-placeholder="Choose one">
                                    <option value=""></option>
                                    <option value="FAPRA">FAPRA</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Non-FAPRA">Non-FAPRA</option>
                                </select>
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
@include('admin.tiket.javascript')
@endpush