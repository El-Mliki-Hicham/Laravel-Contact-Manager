<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'Contacts';
    protected $fillable =  [ 'Nom', 'Prenom', 'Tele', 'Email', ];
}
