<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['_categoriesID', 'title', 'firstName', 'lastName', 'arrival', 'departure', 'adults', 'kids', 'total'];
}
