<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function area()
    {
        return $this->belingTo(Area::class, 'foreign_key');
    }

    public function genre()
    {
        return $this->belongTo(Genre::class, 'foreign_key');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'foreign_key');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'foreign_key');
    }
}
