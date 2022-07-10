<?php

namespace App\Models;

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable=["Name","Description","Categorie_Product_id"];

    public function Products(){
        return $this->belongsToMany(Products::class,"Categorie_Product_id");
    }
}
