<body style="background-color: #999999">
<h1>voitures</h1>

<?php require 'Voiture.php';

/**/

$v1 = new Voiture("Peugeot", "408", 5);
$ve1 = new VoitureElectrique("Tesla", "model Heil" , 100);


echo ".........test get info.....<br>";
echo $v1->getInfo(); // test __toString
echo $ve1->getInfo();

echo $ve1->setAutonomie(456)."<br>";
echo $ve1->getAutonomie()."<br>";

echo $ve1->getInfo();