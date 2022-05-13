<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    protected $fillable = [
        'order_id', 'tiket_id', 'gross_amount', 'payment_type', 'transaction_time', 'transaction_status', 'va_number', 'pdf_url', 'status_code', 'created_at', 'updated_at'
    ];
}
