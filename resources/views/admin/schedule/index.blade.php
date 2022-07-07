@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-white">List Schedule</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addSchedule" data-toggle="modal" data-target="#modalSchedule"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Schedule</button>
            <div class="table-responsive">
                <table
                    class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSchedule">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">no</th>
                            <th class="text-center" style="width: 5%">agenda</th>
                            <th class="text-center">start</th>
                            <th class="">end</th>
                            <th class="">description</th>
                            <th class="">speaker</th>
                            <th class="">Tiket</th>
                            <th class="text-center" style="width: 15%;">action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Add Wilayah --}}
<div class="modal fade" id="modalSchedule" tabindex="-1" role="dialog" aria-labelledby="modalSchedule"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Schedule</h3>
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
                            <label for="nama">Agenda</label>
                            <input type="text" class="form-control" id="agenda" name="agenda" placeholder="Agenda">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Mulai</label>
                            <input type="text" class="form-control" id="tgl_mulai" name="tgl_mulai"
                                placeholder="Tanggal Mulai">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Akhir</label>
                            <input type="text" class="form-control" id="tgl_akhir" name="tgl_akhir"
                                placeholder="Tanggal Akhir">
                        </div>
                        <div class="form-group">
                            <label for="nama">Speaker</label>
                            <div class="s_speaker">
                                <select class="js-select2 form-control" id="speaker" name="speaker[]"
                                    style="width: 100%;" data-placeholder="Choose many.." multiple>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tiket</label>
                            {{-- <select class="form-control" id="tiket" name="tiket[]" style="width: 100%;"
                                data-placeholder="Choose many..">
                                <option></option>
                            </select> --}}
                            <select class="form-control" id="tiket" name="tiket">
                                <option>Pilih Tiket</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Image</label>
                                    <input type="file" class="form-control-file" name="foto" id="foto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-previews img-fluid mt-3 col-sm-5">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"
                                placeholder="Deskripsi Schedule"></textarea>
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

{{-- Detail Schedule --}}
<div class="modal fade" id="modalDetailSchedule" tabindex="-1" role="dialog" aria-labelledby="modalDetailSchedule"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Detail Schedule</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option closeModal" data-dismiss="modal"
                            aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-previews-edit img-fluid">
                            {{-- <img src="https://placeimg.com/640/480/tech" class="img-fluid" alt="..."> --}}
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Agenda</th>
                                        <td id="detailAgenda">Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Mulai</th>
                                        <td id="detailTglMulai">Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Akhir</th>
                                        <td id="detailTglAkhir">Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Speaker</th>
                                        <td id="detailSpeaker"></td>
                                    </tr>
                                </tbody>
                            </table>
                            Description :
                            <div id="detailDescription" align="justify"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary closeModal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.schedule.javascript')
@endpush