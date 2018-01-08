<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 08/01/2018
 * Time: 21:51
 */

namespace OCFram;
class NotNullValidator extends Validator
{
	public function isValid($value)
	{
		return $value != '';
	}
}