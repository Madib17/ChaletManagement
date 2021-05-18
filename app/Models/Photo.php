<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'chalet_id',
        'name',
    ];

    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
