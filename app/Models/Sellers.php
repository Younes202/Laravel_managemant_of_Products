<?php

namespace App\Models;
namespace App\Models\Products;

use App\Models\Sellers\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;
    public function Products(){
        return $this->hasMany(Products::class);
    }
}
