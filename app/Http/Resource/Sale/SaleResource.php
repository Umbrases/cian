<?php

namespace App\Http\Resource\Sale;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{


    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'address' => $this->address,
            'square' => $this->square,
            'height' => $this->height,
            'year' => $this->year,
            'floor' => $this->floor,
            'price' => $this->price,
            'finishing' => $this->finishing,

        ];
    }
}
