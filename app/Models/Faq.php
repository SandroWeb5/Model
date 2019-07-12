<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'pergunta', 'resposta', 'tipo', 'user_id'
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y H:i:s',
    ];

    public function user(){
        return $this->belongsTo('App\Models\Faq');
    }
}
