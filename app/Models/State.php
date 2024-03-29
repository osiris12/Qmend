<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function businesses(): Object
    {
        return $this->hasMany(Business::class, 'state_id', 'state_id');
    }
}
