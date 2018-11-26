<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'postal_code',
        'phone_number', 'facebook', 'twitter', 'github',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Defines item relationship
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }


    /**
     *
     */
    public function requests() {
        return $this->hasManyThrough('App\RentRequest', 'App\Item', 'user_id');
    }

    /**
     *
     */
    public function requestings()
    {
        return $this->hasMany('App\RentRequest', 'requester_id');
    }

    public function isRequesting($item) {
        $request = $this->requestings->where('item_id', $item->id)->where('resolved', 0)->where('accepted', null)->first();

        return ($request !== null);
    }

    public function isRenting($item) {
        $request = $this->requestings->where('item_id', $item->id)->where('resolved', 0)->where('accepted', true)->first();

        return ($request !== null);
    }

    public function hasRented($item) {
        $request = $this->requestings->where('item_id', $item->id)->where('resolved', true)->where('accepted', true)->first();

        return ($request !== null);
    }

    public function reviews()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }

    public function reviewed_by()
    {
        return $this->hasMany(Review::Class);
    }

    public function getReviewsAttribute() {
        return $this->reviews();
    }
}
