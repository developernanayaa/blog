<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    //setting mass assignment
    protected $fillable=[
        'title','description','body'
    ];

    //creating relationships

    //$article->user()

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
//        return $this->belongsTo('\App\User','id','user_id');
    }
}
