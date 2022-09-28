<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'TodoList';
    protected $fillable =  [ 'Nom_Tach', 'Description'];
    public $timestamps = false;
}
