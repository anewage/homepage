<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
	public function getDescriptionAttribute( $attr ) {
		if (!isset($attr) || $attr == "")
			return strip("<i>This post has no content!</i>");
		return strip($attr);
    }
}
