<?php

class Image extends BaseModel
{
	protected $table = 'images';

	public function posts()
	{
		return $this->belongsTo('Post');
	}

}