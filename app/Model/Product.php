<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
class Product extends Model
{
   protected $fillable = [
     'name','details','stock','price','discount'
   ];
   public function Reviews(){
     return $this->hasMany(Review::class);
   }
}
