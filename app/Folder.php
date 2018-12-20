<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [];

    public function memos(){
        return $this->hasMany('App\Memo');
    }
}
