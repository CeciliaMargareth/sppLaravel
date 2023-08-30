<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sppModel extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $guarded = [];
}
