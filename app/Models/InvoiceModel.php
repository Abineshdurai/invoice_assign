<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceModel extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'invoice';
    protected $fillable = [
        'id',
        'client_name',
        'client_email',
        'description',
        'quantity',
        'price_per_quantity',
        'tax_percent',
        'tax_amount',
        'subtotal',
        'total',
        'status',
        'created_at',
        'updated_at'
    ];
}
