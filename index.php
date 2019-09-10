<?php
include_once "Circel.php";
include_once "Cylinder.php";
//$radius = 20;
//$color = "red";
//$heigth = 100;
$circel = new Circel(100,"red");
$cylinder = new Cylinder(99,"blue",101);
$circel->toString();
$cylinder->toString();