<?php

namespace App\Models;

namespace App\Models\Categories;

namespace App\Models\Transactions;

namespace App\Models\Sellers;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    const AVAILABLE_PRODUCT ='Available';
    const UNAVAILABLE_PRODUCT ='unavailable';

    use HasFactory;
    protected $fillable=["Name","Description","Quantity","Status","image","Seller_id"];
    public function isAvailable(){
        return $this->status == Products::AVAILABLE_PRODUCT;
    }
    public function Categories(){
        return $this->belongsToMany(Categories::class ,"Categorie_Product_id");
    }
    public function Transactions(){
        return $this->hasMany(Transactions::class);
    }
    public  function Sellers(){
            return $this->belongsTo(Sellers::class);
        }
}
