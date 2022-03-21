@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Registran</h3>
        </div>
        <div class="block-content block-content-full">
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableKategori">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%;" style="font-size: 12px">no</th>
                        <th class="text-center">nama</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 35%;">email</th>
                        <th class="text-center" style="width: 15%;">no telepon</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection
@push('scripts')

@endpush