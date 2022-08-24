<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function reviews(): Object
    {
        return $this->hasMany(Review::class);
    }

    public function hoursofoperations(): object
    {
        return $this->hasMany(HoursOfOperation::class);
    }
}
