@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                        data-to="{{ $countSpeaker }}">0
                    </div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Speaker</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                        data-to="{{ $countSchedule }}">0
                    </div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Schedule</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                        data-to="{{ $countTiket }}">0
                    </div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Tiket</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000"
                        data-to="{{ $countSponsor }}">0
                    </div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sponsor</div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.dashboard.javascript')
@endpush