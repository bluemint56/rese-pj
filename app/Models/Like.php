<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

        protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'user_id',
        'shop_id',
    ];

    public function shop()
    {
        return $this->belongTo(Shop::class, 'foreign_key');
    }

    public function User()
    {
        return $this->belongTo(User::class, 'foreign_key');
    }
}
