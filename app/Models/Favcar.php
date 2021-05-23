<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favcar extends Model
{
    public function user()
    {
        return $this->belongsToMany(App\Models\User::class);
    }
}
