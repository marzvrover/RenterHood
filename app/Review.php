<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'owner_id',
        'reviewable_id',
        'value',
        'comment'
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

    public function getRatingAttribute() {
        $output = "";

        switch ($this->value) {
            case 1:
                $output =
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>";
                break;
            case 2:
                $output =
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>";
                break;
            case 3:
                $output =
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star-o'></i>" .
                    "<i class='fa fa-star-o'></i>";
                break;
            case 4:
                $output =
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star-o'></i>";
                break;
            case 5:
                $output =
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>" .
                    "<i class='fa fa-star'></i>";
                break;
        }

        return $output;
    }

}
