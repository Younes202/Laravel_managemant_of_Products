<?php

namespace App\Models;

namespace App\Models\Categories;

namespace App\Models\Transactions;

namespace App\Models\Sellers;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    const active = "Active";
    const desactive = "Desactive";
    protected $fillable=["Name","Description","Quantity","Status","Product_Transaction_id","Categorie_Product_id"];

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
