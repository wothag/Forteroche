<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 08/01/2018
 * Time: 22:59
 */

namespace OCFram;

class TextField extends Field
{
	protected $cols;
	protected $rows;

	public function buildWidget()
	{
		$widget = '';

		if (!empty($this->errorMessage))
		{
			$widget .= $this->errorMessage.'<br />';
		}

		$widget .= '<div class="form-group"><label>'.$this->label.'</label><textarea class="form-control" name="'.$this->name.'"';

		if (!empty($this->cols))
		{
			$widget .= ' cols="'.$this->cols.'"';
		}

		if (!empty($this->rows))
		{
			$widget .= ' rows="'.$this->rows.'"';
		}
		if (!empty($this->id))
		{
			$widget .= ' id="'.$this->id.'"';
		}
		$widget .= '>';

		if (!empty($this->value))
		{
			$widget .= htmlspecialchars($this->value);
		}

		$widget .= '</textarea></div>';
		return $widget;
	}

	public function setCols($cols)
	{
		$cols = (int) $cols;

		if ($cols > 0)
		{
			$this->cols = $cols;
		}
	}

	public function setRows($rows)
	{
		$rows = (int) $rows;

		if ($rows > 0)
		{
			$this->rows = $rows;
		}
	}
}