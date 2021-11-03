<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public $primaryKey='id';

  protected $fillable = [
        'name', 'email', 'password',
    ];


public static $addRules=[
    'email'=>'required|unique:users|regex:/^.+@.+\..+$/i',
    'phone_number'=>'required|unique:users',
    'name'=>'required|regex:/^[\pL\s\-]+$/u',
];

public static $confirmpassword=[
    
    'password'=>'required|min:6',
   
];


}