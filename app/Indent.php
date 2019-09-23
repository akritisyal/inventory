<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Indent extends Model
{

    use Notifiable;
    public $table = "indent";
    protected $fillable = [
       'indentno', 'item', 'quantity', 'department', 'statusS', 
    ];  
}
