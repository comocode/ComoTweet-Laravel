<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = ['tweet'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeLatest($query){
        $query->orderBy('created_at','desc');
    }

}
