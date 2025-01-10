<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarcodeAllocation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'manufacturer_id',
        'distributor_id',
        'dealer_id',
        'barcode_id',
        'status',
    ];
}
