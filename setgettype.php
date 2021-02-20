<?php

$x=2;
echo gettype($x)."<br>";

$y=2.20;
echo gettype($y)."<br>";

$z="2.20";
echo gettype($z)."<br>";

$xy=true;
echo gettype($xy)."<br>";

$yz=array();
echo gettype($yz)."<br>";

$xz=array("1","2","3");
echo gettype($xz)."<br>";

$xyz=NULL;
echo gettype($xyz)."<br><br>";

$w=6.67;
echo gettype($w)."<br>";

settype($w,"string");
echo gettype($w)."<br>";

settype($w,"integer");
echo gettype($w)."<br>";

?>