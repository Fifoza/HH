<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creativity extends Model
{
    protected $guarded = [];
    protected $table = 'creativities';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
