<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 23/03/2018
 * Time: 17:57
 */

class Pagination

{

var $data;

	function Paginate($values, $per_page)
	{
		$total_values = count($values);


		if(isset($_GET['page']))
		{
			$current_page = $_GET['page'];
		} else
		{
			$current_page = 1;
		}
		$counts = ceil($total_values/$per_page);
		$param1 = ($current_page- 1)*$per_page;
		$this->data = array_slice($values,$param1,$per_page);

		for($x=1; $x<=$counts; $x++)
		{
		$numbers[] = $x;
		}
		return $numbers;

	}


	function fetchResult()
	{
		$resultsValues = $this->data;
		return $resultsValues;

	}
}

	$pag = new Pagination();
	$data = array("Chapitre1", "Chapitre2", "chapitre3" );

	$numbers = $pag->Paginate($data,2);
	$result = $pag->fetchResult();

	foreach ($result as $r)
	{
		echo '<div>'.$r.'</div>';



	}

	foreach ($numbers as $num)
	{

		echo '<a href="Pagination.php?page='.$num.'">'.$num.'</a>';


	}