<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'phone_number',
        'note',
    ];

    public function daily_slot(){
        return $this->hasMany(DailySlot::class);
    }
}
