<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentRequest extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    public function requester() {
        return $this->belongsTo('App\User');
    }

    public function requestee() {
        return $this->belongsTo('App\User');
    }

    public function item() {
        return $this->belongsTo('App\Item');
    }
}
