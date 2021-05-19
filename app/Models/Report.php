<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function review(){
        return $this->belongsTo(Review::class);
    }

    public function title(){
        return $this->belongsTo(Title::class);
    }
}
