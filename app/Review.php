<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'user_id',
        'value',
        'comment',
    ];

    public function reviewable()
    {
        return $this->morphTo();
    }
    //

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

}
