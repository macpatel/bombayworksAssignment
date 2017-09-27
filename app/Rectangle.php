<?php

namespace App;

include_once "ShapeInterface.php";

class Rectangle implements ShapeInterface
{
	private $width;
	private $height;

	public function __construct($width, $height){
		$this->width = $width;
		$this->height = $height;
	}

	/**
	 * Calculate area of the shape
	 * @return float
	 */
	public function area(){
		return round($this->width * $this->height, 2);
	}
}