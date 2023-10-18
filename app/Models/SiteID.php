<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteID extends Model
{
    use HasFactory;

    
        protected $fillable = ['name', 'phone','phone2', 'image','email','facebook','instagram','twitter','youtube'];
    
}
