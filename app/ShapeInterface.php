<?php

namespace App;
/*
 * ShapeInterface. Every new Shape should implement this Interface
 */
interface ShapeInterface{
	/**
	 * Return calculated area of the shape
	 * @return float
	 */
	public function area();
}