<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function source(): object
    {
        return $this->hasOne(Source::class, 'id', 'source_id');
    }
}
