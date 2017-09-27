<?php
namespace App;

include_once "ShapeInterface.php";

class ShapeController
{
	/**
	 * Call area function on the Object
	 * @param  ShapeInterface $shape
	 * @return float
	 */
	public function area(ShapeInterface $shape){
		return $shape->area();
	}
}