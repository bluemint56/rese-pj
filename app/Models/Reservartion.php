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
        return $this->belongsTo(Shop::class, 'foreign_key');
    }

    public function user()
    {
        return $this->belingsTo(User::class, 'foreign_key');
    }

}
