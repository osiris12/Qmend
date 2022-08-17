<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Object_;

class Business extends Model
{
    use HasFactory;

    public function reviews(): Object
    {
        return $this->hasMany(Review::class);
    }

}
