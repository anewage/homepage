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
 *
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Post extends Model
{

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

	public function getShortDescriptionAttribute() {
		return substr($this->description, 0, 10) . '...';
    }
}
