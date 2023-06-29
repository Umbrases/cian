<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivingSpace extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
