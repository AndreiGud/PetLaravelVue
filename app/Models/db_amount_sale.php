<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_amount_sale extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'count'];
}
