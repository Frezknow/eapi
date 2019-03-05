<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
class Product extends Model
{
    return $this->hasMany(Review::class);
}
