<?php

include "app/Rectangle.php";
include "app/Circle.php";
include "app/Square.php";
include "app/Elipse.php";
include "app/ShapeController.php";

$shapeType = $_POST['shape_type'];
$shape = "";
switch ($shapeType) {
	case 'rectangle':
		$width = $_POST['width'];
		$height = $_POST['height'];
		$shape = new App\Rectangle($width, $height);
		break;
	case 'circle':
		$diameter = $_POST['diameter'];
		$shape = new App\Circle($diameter);
		break;
	case 'square':
		$width = $_POST['width'];
		$shape = new App\Square($width);
		break;
	case 'elipse':
		$width = $_POST['width'];
		$height = $_POST['height'];
		$shape = new App\Elipse($width, $height);
		break;
}

echo (new App\ShapeController())->area($shape);