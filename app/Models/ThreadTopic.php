<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadTopic extends Model
{
    use HasFactory;

    public function threads() {
        return $this->hasMany('App\Models\Thread');
    }
}
