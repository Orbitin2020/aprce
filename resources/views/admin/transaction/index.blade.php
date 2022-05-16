@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-white">Management Peserta / Transaction</h3>
            <span class="float-right text-white">Total : Rp. {{ number_format($totalTransaction) }}</span>
        </div>
        <div class="block-content block-content-full">
            {{-- <button type="button" id="addTiket" data-toggle="modal" data-target="#modalTiket"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Tiket</button> --}}
            <div class="table-responsive">
                <table
                    class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableTransaction">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">no</th>
                            <th class="text-center" style="width: 5%">nama</th>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Gross Amount</th>
                            <th class="text-center">Transaction Time</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center" style="width: 15%;">action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Detail --}}
<div class="modal fade" id="modalDetailTransaction" tabindex="-1" role="dialog" aria-labelledby="modalDetailTransaction"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Detail Transaction</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Biodata</strong></p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col" id="nama"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td id="email"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Telepon</th>
                                            <td id="noHp"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity</th>
                                            <td id="qty"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Transaction</strong></p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col" id="order_id"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Gross Amount</th>
                                            <td id="gross_amount">Rp.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Payment Type</th>
                                            <td id="payment_type"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Payment Code</th>
                                            <td id="payment_code"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Transaction Time</th>
                                            <td id="transaction_time"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <p><strong>Ticketing</strong></p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID Tiket</th>
                                    <th scope="col">Nama Ticket</th>
                                    <th scope="col">Kategori Ticket</th>
                                    <th scope="col">Participant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" id="id_tiket"></th>
                                    <td id="nm_tiket"></td>
                                    <td id="kategori_tiket"></td>
                                    <td id="participant"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.transaction.javascript')
@endpush