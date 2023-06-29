<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function livingSpaces(){
        return $this->belongsTo(LivingSpace::class, 'living_space_id', 'id');
    }
}
