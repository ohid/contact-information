<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'phone',
    	'telephone',
    	'current_address',
    	'permanent_address',
    	'batch',
    	'shift',
    	'department',
    	'current_study_inst',
        'about',
    	'hobby',
    	'aim_in_life'
   	];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
