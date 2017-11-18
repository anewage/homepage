<?php

namespace App;

use Carbon\Carbon;
use Moloquent\Eloquent\Model as Model;

/**
 * Class Post
 * @package App
 *
 * @property string title
 * @property mixed description
 * @property string slug
 *
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Post extends Model
{

	protected $fillable = ['title', 'slug', 'description'];

	/**
	 * @param $attr
	 *
	 * @return string
	 */
	public function getDescriptionAttribute( $attr ) {
		if (!isset($attr) || $attr == "")
			return strip("<i>This post has no content!</i>");
		return strip($attr);
    }

    public function getRouteKeyName(){
		return 'slug';
	}

	public function setSlugAttribute($attr)
	{
		$this->attributes['slug'] = strtolower($attr);
	}

	public function getShortDescriptionAttribute() {
		return substr($this->description, 0, 10) . '...';
    }
}
