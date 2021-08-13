<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Thread extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function messages() {
        return $this->hasMany('App\Models\ThreadMessage');
    }

    public function topic() {
        return $this->hasOne('App\Models\ThreadTopic', 'id', 'thread_topic_id');
    }
}
