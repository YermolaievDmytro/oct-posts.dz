<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['name', 'text'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
