<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps = false;
    //since i am using table without migration, i need to make $timestap nullable
    protected $fillable=['ProductName','UnitPrice','CategoryID','SupplierID','description','photo'];
    use HasFactory;
}
