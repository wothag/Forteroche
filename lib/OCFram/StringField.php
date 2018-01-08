<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 08/01/2018
 * Time: 22:07
 */

namespace OCFram;
class StringField extends Field
{
	protected $maxLength;

	public function buildWidget()
	{
		$widget = '';

		if (!empty($this->errorMessage))
		{
			$widget .= $this->errorMessage.'<br />';
		}

		$widget .= '<div class="form-group"><label>'.$this->label.'</label><input class="form-control" type="text" name="'.$this->name.'"';

		if (!empty($this->value))
		{
			$widget .= ' value="'.htmlspecialchars($this->value).'"';
		}

		if (!empty($this->maxLength))
		{
			$widget .= ' maxlength="'.$this->maxLength.'"';
		}
		return $widget .= '/></div>';
	}

	public function setMaxLength($maxLength)
	{
		$maxLength = (int) $maxLength;

		if ($maxLength > 0)
		{
			$this->maxLength = $maxLength;
		}
		else
		{
			throw new \RuntimeException('La longueur maximale doit être un nombre supérieur à 0');
		}
	}
}