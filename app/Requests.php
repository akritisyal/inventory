<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Requests extends Model
{

    use Notifiable;
    protected $fillable = [
        'item', 'quantity', 'name' ,'role','department', 'statusS', 'statusH' 
    ];  

public static $rules= [
    'quantity' => 'required'
];

}
