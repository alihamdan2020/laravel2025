<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;
    protected $table="persons";
    protected $primaryKey ="personId";
    protected $fillable=['personName','personAge','password'];
}
