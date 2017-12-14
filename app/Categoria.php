<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'descrizione', 'menu_id', 'immagine'];

	public function piatti()
	{
		return $this->hasMany('App\Piatto');
	}
}
