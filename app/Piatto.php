<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piatto extends Model
{
    protected $table = 'piattos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'descrizione', 'categoria_id', "immagine"];
}
