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
        'name', 'email', 'password', 'role', 'department', 'verifyToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static $rules= [
        'email' => 'required|email|exists:users',
        'password' => 'required',
        // 'g-recaptcha-response' =>'required', 
        //'status' => ''
    ];
    public static $create_rules= [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3|confirmed',
        'password_confirmation'=>'required|min:3'
        //'email' => ['required', 'max:255', 'email', 'regex:/(.*)@(igdtu)\.ac.in/i', 'unique:users'],
        //'password' => 'required'
    ];


}
