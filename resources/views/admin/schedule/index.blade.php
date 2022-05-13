@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-white">List Schedule</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addSchedule" data-toggle="modal" data-target="#modalSchedule"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Speaker</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSchedule">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center" style="width: 5%">agenda</th>
                        <th class="text-center">start</th>
                        <th class="">end</th>
                        <th class="">description</th>
                        <th class="">speaker</th>
                        <th class="" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
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
                                    <!-- Required for data-placeholder attribute to work with Select2 plugin -->

                                </select>
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
@endsection
@push('scripts')
@include('admin.schedule.javascript')
@endpush