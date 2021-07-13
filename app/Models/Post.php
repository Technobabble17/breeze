<?php

namespace App\Models;

use App\Scopes\OwnedByUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];
    protected static function booted()
    {
        static::addGlobalScope(new OwnedByUser);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
