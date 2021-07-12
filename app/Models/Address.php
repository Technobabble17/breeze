<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'address1', 'address2', 'city', 'state', 'zip', 'email', 'primaryphone'];

public function user(){
    return $this->belongsTo('App\User');
}
}
