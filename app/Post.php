<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $dates = ['deleted_at'];

protected $fillable = [

    'title',
    'contact',


];public function user()
{
    return $this->belongsTo('App\User');

}



}
