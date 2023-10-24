<?php

namespace App\Models;

use App\Http\Controllers\User_Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    use HasFactory;

    protected $table = "contact_number";

    public $timestamps = false;

    public function contactFunction(){
        return $this->belongsTo(User_Controller::class, 'contact_number');

        // im back,, nag coffee break la
    }
}
