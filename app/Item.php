<?php

namespace App;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'description',
        'postal_code',
        'price',
        'picture',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * Defines user relationship
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Accessor for the short description.
     * The short description is the first 15 words of the description.
     *
     * @return string
     */
    public function getShortDescriptionAttribute() {
        return Str::words($this->description, 15);
    }
}
