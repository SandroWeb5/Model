<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
		'titulo','descricao','chaves','email','fone1','fone2','whatsapp1','whatsapp2','endereço','cnpj','contato','slogan','youtube','twitter','instagram','facebook','google','dest1','dest2','dest3','dest4'
	];
}
