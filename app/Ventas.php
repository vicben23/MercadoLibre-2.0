<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Ventas extends Eloquent 
{
    protected $connection = 'mongodb';
    protected $collection = 'ventas'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
