<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTTH extends Model
{
    protected $table = 'customertth';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'TTHNo',
        'SalesID',
        'TTOTTPNo',
        'CustID',
        'DocDate',
        'Received',
        'ReceivedDate',
        'FailedReason'
    ];
}
