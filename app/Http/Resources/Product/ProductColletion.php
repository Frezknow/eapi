<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\JsonResourceColletion;
class ProductColletion extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
          'name'=>$this->name,
          'totalPrice'=> round((1-($this->discount/100))*$this->price,2),
          'rating'=>$this->reviews->count() >0?round($this->reviews->sum('star')/$this->reviews->count()):'No rating yet.',
          'discount'=>$this->discount,
          'href'=>[
            'link'=>route('products.show',$this->id)
          ]
        ];
    }
}
