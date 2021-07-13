<?php

namespace App\Models;

use App\Scopes\OwnedByUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'address1', 'address2', 'city', 'state', 'zip', 'email', 'primaryphone'];
    protected static function booted()
    {
        static::addGlobalScope(new OwnedByUser);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
