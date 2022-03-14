<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservartion extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'user_id',
        'shop_id',
        'date',
        'time',
        'number',
    ];

    public function shop()
    {
        return $this->belongTo(Shop::class, 'foreign_key');
    }

    public function user()
    {
        return $this->belingTo(User::class, 'foreign_key');
    }

}
