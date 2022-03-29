@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Speaker</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addSpeaker" data-toggle="modal" data-target="#modalSpeaker"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Speaker</button>
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSpeaker">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center" style="width: 5%">Foto</th>
                        <th class="text-center">nama</th>
                        <th class="d-none d-sm-table-cell text-center">jabatan</th>
                        <th class="d-none d-sm-table-cell text-center">kategori</th>
                        <th class="d-none d-sm-table-cell text-center">prioritas</th>
                        <th class="d-none d-sm-table-cell text-center">deskripsi</th>
                        <th class="d-none d-sm-table-cell text-center">created_at</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Wilayah --}}
<div class="modal fade" id="modalSpeaker" tabindex="-1" role="dialog" aria-labelledby="modalSpeaker" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Speaker</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_speaker" id="frm_speaker" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Prioritas</label>
                            <div class="">
                                <select class="js-select2 form-control" name="prioritas" id="prioritas" style="width: 100%;" data-placeholder="Choose one">
                                    <option value=""></option>
                                    <option value="1">1</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <div class="">
                                <select class="js-select2 form-control" name="kategori" id="kategori" style="width: 100%;" data-placeholder="Choose one">
                                    <option value=""></option>
                                    <option value="Lokal">Lokal</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="International">International</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group ">
                                <label class="col-form-label" for="foto">Foto</label>
                                <div class="file-loading">
                                    <input type="file" name="foto" id="foto">
                                </div>
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
@include('admin.speaker.javascript')
@endpush