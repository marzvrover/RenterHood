<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class ModelName extends Model
{
    use Searchable;
}
