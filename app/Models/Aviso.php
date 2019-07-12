<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $fillable = [
        'aviso', 'tipo', 'user_id'
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y H:i:s',
    ];

    public function user(){
        return $this->belongsTo('App\Models\Faq');
    }
}
