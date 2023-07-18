<?php

namespace App\Services\Flat;

use App\Models\LivingSpace;

class Service
{

    public function create($data){
        $livingSpace = LivingSpace::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'address' => mb_strtolower($data['address']),
            'square' => $data['square'],
            'height' => $data['height'],
            'year' => $data['year'],
            'floor' => $data['floor'],
            'price' => $data['price'],
            'finishing' => $data['finishing'],
            'room_id' => $data['room_id'],
            'type_id' => $data['type_id'],
            'user_id' => auth()->user()->id,
        ]);
    }

    public function update(LivingSpace $livingSpace, $data){
        $livingSpace->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'address' => $data['address'],
            'square' => $data['square'],
            'height' => $data['height'],
            'year' => $data['year'],
            'floor' => $data['floor'],
            'price' => $data['price'],
            'finishing' => $data['finishing'],
            'room_id' => $data['room_id'],
            'type_id' => $data['type_id'],
        ]);
    }

}
