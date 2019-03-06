<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\JsonResourceColletion;
class ProductColletion extends JsonResourceColletion
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
