<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.10.2016
 * Time: 15:06
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'photo'
    ];

}