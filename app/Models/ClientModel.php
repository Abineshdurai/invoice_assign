<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientModel extends Model
{
    use SoftDeletes;

    // public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $table = 'clients';
    protected $fillable = [
        'id',
        'client_name',
        'client_email',
        'status',
        'created_at',
        'updated_at'
    ];
}
