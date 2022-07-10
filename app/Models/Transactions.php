<?php

namespace App\Models;
use App\Models\Sellers\Products;
use App\Models\Transactions\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable=["Quantity","Client_id","Product_id"];
    public function Clients(){
        return $this->belongsTo(Clients::class , "Client_id");

    }

    public function Products()
    {
        return $this->belongsTo(Products::class ,"Product_id");
    }
}
