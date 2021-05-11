<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'bedroom',
        'type',
        'adult',
        'child',
        'price',
        'size',
        'detail',
        'chalet_id'
    ];

    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
