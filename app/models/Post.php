<?php

use Carbon\Carbon;

class Post extends BaseModel
{

// the table thats being used is posts
    protected $table = 'posts';

// defines the rules for each parameter 
    public static $rules = array(
    	'title'      => 'required|max:100',
    	'body'       => 'required|max:10000',	
	);
// get's the time that the post was created at and converts it to easily be read by humans with diffForHumans()
    public function getCreatedAttribute($value)
    {
    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago')->diffForHumans();
    }
// sets the slug attribute which will return a post with dashes, Ex. Today is Monday as Today-is-Monday.
    public function setSlugAttribute($value)
	{
		$slug = Str::slug($value);
		$slugCount = count( $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get());
		$slugFinal = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
		$this->attributes['slug'] = $slugFinal;
	}
// posts belong to a particular user
	public function user()
	{
   		return $this->belongsTo('User');
	}

	public function booksWithAuthor()
	{
		return Post::with('user')->get();
	}
}