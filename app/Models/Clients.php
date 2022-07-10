<?php

namespace App\Models;

namespace App\Models\Transactions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    public function Transactions(){
        return $this->hasMany(Transactions::class);
    }
}
