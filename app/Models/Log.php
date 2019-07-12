<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'usuario', 'email', 'evento', 'user_id', 'created_at'
    ];

    public function user(){
        return $this->belongsTo('App\Models\Faq');
    }

	protected $casts = [
        'created_at' => 'date:d-m-Y H:i:s',
    ];
}
