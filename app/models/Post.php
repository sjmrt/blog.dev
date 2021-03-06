<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

    public static $rules = array(
    	'title'    => 'required|min:5|max:100',
    	'body'     => 'required|min:10|max:10000'
    );

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug_title'] = Str::slug($value);
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function images()
    {
        return $this->hasMany('Image');
    }

}