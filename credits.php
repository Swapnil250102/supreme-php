<?php

$osp  = 4;
$os  = 4;
$ala  = 4;
$phy = 4;
$sts  = 1;
$toc  = 3;
$ooad  = 4;

echo "MISHRA VAIBHAV RAJEEV<br>";
echo "4th SEMESTER CREDITS DETAILS<br><br>";
echo "ITE1008 OPEN SOURCE PROGRAMMING - $osp CREDITS<br>";
echo "ITE2002 OPERATING SYSTEMS - $os CREDITS<br>";
echo "MAT3004 APPLIED LINEAR ALGEBRA - $ala CREDITS<br>";
echo "PHY1701 ENGINEERING PHYSICS - $phy CREDITS<br>";
echo "STS2202 ADVANCED APTITUDE AND REASONING SKILLS - $sts CREDIT<br>";
echo "ITE1006 THEORY OF COMPUTATION - $toc CREDITS<br>";
echo "ITE1007 OBJECT ORIENTED ANALYSIS AND DESIGN - $ooad CREDITS<br><br>";

$credits = $osp+$os+$ala+$phy+$sts+$toc+$ooad;
echo "TOTAL CREDITS FOR THIS SEMESTER ARE $credits CREDITS<br>";

?>