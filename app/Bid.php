<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //protected $table = 'bids';
    protected $fillable = [
        'title','alias','city','region',
        'category','condition','price','room_number','bath_places','sleep_places','area','type',
        'description','keywords','others'
    ];
}
