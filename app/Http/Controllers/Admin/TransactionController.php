<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Pendaftar;
use Auth;
use DataTables;
use Validator;

class TransactionController extends Controller
{
    public function index()
    {
        $query = Pendaftar::with(['transaction', 'getTiket'])->get();
        debugbar()->info($query);
        return view('admin.transaction.index');
    }

    public function getData()
    {
        // $query = Pendaftar::with(['transaction', 'getTiket'])->get();
        $query = Pendaftar::with(['transaction'])->get();
        return DataTables::of($query) 
            ->addIndexColumn()
            ->addColumn('Actions', function($query) {
                $html = '<button href="javascript:void(0)" data-id="' . $query->id_pendaftar . '" id="detailTransaction" type="button" class="detail btn btn-info btn-sm m-1" tittle="detail"><i class="fa fa-eye" ></i></button><button href="javascript:void(0)" data-id="' . $query->id_pendaftar . '" id="deleteTransaction" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
                return $html;
            })
            ->addColumn('order_id', function($query) {
                return $query->transaction->order_id;
            })
            ->addColumn('gross_amount', function($query) {
                return number_format($query->transaction->gross_amount);
            })
            ->addColumn('transaction_time', function($query) {
                return $query->transaction->transaction_time;
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function detailData($id)
    {
        $data = Pendaftar::with(['transaction', 'getTiket'])->where('id_pendaftar', $id)->get();
        debugbar()->info($data);
        return $data[0];
    }

    public function delete($id)
    {
        $data = Pendaftar::with(['transaction', 'getTiket'])->where('id_pendaftar', $id)->first();
        $id_transaction = $data->transaction->id_transaction;
        $transaction = Transaction::where('id_transaction', $id_transaction)->first();
        
        $data->delete();
        $transaction->delete();
        return response([
            'status' => 200,
            'message' => 'Berhasil menghapus data...'
        ]);
    }
}
