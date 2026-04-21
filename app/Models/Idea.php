<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $guarded = [];

    protected  $attributes = [
        'state' => 'pending'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
