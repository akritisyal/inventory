<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Replace extends Model
{

    use Notifiable;
    protected $fillable = [
        'item', 'description', 'name' ,'role','department', 'statusH' 
    ];  

public static $rules= [
    'description' => 'required',
    'item'=>'required'
];

}