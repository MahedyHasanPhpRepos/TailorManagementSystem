<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothName extends Model
{
    use HasFactory;

    protected $fillable = [
        'cloth_name' , 
        'cloth_order_id'
    ];


    public function cloth_order(){
        return $this->belongsTo(ClothOrder::class) ; 
    }
}
