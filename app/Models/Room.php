<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'adult',
        'child',
        'price',
        'size',
        'detail',
        'chalet_id',
        'bedroom_id',
        'bed_id',
    ];

    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }

    public function bed(){
        return $this->belongsTo(Bed::class);
    }
    
    public function bedroom(){
        return $this->belongsTo(Bedroom::class);
    }
}
