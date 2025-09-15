<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'CustID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CustID',
        'Name',
        'Address',
        'BranchCode',
        'PhoneNo'
    ];
}
