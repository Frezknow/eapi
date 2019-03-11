<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    public function render(){
      return ['errors'=>'Product Doesn\'t below to User.'];
    }
}
