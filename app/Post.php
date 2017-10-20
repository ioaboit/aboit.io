<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array();
    public static $rules = array(
        'title' => 'required',
        'body' => 'required'
    );
    public function user()
    {
        return $this->belongsTo('App\User')->select(array('id', 'name'));
    }
}
