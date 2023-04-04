<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'user_email',
        'status',
    ];

    public function Item(){
        return $this->hasOne(Item::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

}
