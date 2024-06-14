<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_product_info extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status','type_product','cost'];
}
