<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasFactory;

    protected $table = "user";


    public function userFunction():HasMany
    {
        return $this->hasMany(contactModel::class, 'id');   //contactController ngayan nak na butang ngadi,, dapat contactModel
    }
}


// Tapus na,, 
// Code, aadto tak repo
// BYEBYEEEEEEEEEEEEEEEEEEEE