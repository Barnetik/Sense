<?php
/**
 * Created by Asier Marqués <asiermarques@gmail.com>
 * Date: 8/5/16
 * Time: 14:52
 */

namespace Simettric\Sense\Traits;


trait ArrayTrait
{

	public function getArrayValue($key, array $array, $default=null)
    {
		if(isset($array[$key])){
			return $array[$key];
		}
		return $default;
	}

}
