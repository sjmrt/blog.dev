<?php

Class Category extends BaseModel
{
	protected $table = 'categories';

	public function posts()
	{
		return $this->belongsToMany('Post');
	}
	
}