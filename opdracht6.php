<?php
require 'opdracht4/auto.php';

$auto1 = new auto();
$auto2 = new auto();
$auto3 = new auto();

$auto1->merk = "Mazda";
$auto2->merk = "Toyota";
$auto3->merk = "Honda";

$auto1->type = "MX-5";
$auto2->type = "ae86";
$auto3->type = "Civic";

$auto1->kleur = "Licht blauw";
$auto2->kleur = "Wit";
$auto3->kleur = "Wit";

$auto1->heeftTrekhaak = false;
$auto2->heeftTrekhaak = false;
$auto3->heeftTrekhaak = true;

// comment van gemaakt voor opdracht 6
// $auto1->kenteken = "CD-43-20";
// $auto2->kenteken = "KO-06-72";
// $auto3->kenteken = "CD-37-89";

// $auto1->kilometers = 3476;
// $auto2->kilometers = 10000;
// $auto3->kilometers = 0;

$auto1->tankInhoud = 50;
$auto2->tankInhoud = 50;
$auto3->tankInhoud = 55;

// $auto1->benzine = 1;
// $auto2->benzine = 1;
// $auto3->benzine = 1;

$auto1->verbruik = 8.1;
$auto2->verbruik = 8;
$auto3->verbruik = 7.7;

$auto1->setKenteken("vd- 365- B");
echo $auto1->getKenteken();
echo "<br>";

echo "De eerste auto is een ". $auto1->merk .":<br>";
foreach ($auto1 as $value) {
  echo "$value<br>";
}

echo "De tweede auto is een ". $auto2->merk .":<br>";
foreach ($auto2 as $value) {
  echo "$value<br>";
}

echo "De derde auto is een ". $auto3->merk .":<br>";
foreach ($auto3 as  $value) {
  echo "$value<br>";
}

echo "<h3>10 Liter tanken in auto 1</h3>";
$verspild = $auto1->tanken(10);
echo "<p> Er is ".$verspild." liter benzine verspild<br>";
echo "Er zit nu ".$auto1->benzinepeil()." liter benzine in de tank.</p>";

echo "<h3>40 Liter tanken in auto 2</h3>";
$verspild = $auto2->tanken(40);
echo "<p> Er is ".$verspild." liter benzine verspild<br>";
echo "Er zit nu ".$auto2->benzinepeil()." liter benzine in de tank.</p>";

echo "<h3>80 Liter tanken in auto 3</h3>";
$verspild = $auto3->tanken(80);
echo "<p> Er is ".$verspild." liter benzine verspild<br>";
echo "Er zit nu ".$auto3->benzinepeil()." liter benzine in de tank.</p>";

echo "<h3>1500 km gereden in auto 1</h3>";
$gereden = $auto1->rijden(1500);
echo "<p> Er is ".$gereden." km gereden.<br>";
echo "Er zit nu ".$auto1->benzinepeil()." liter benzine in de tank.</p>";

echo "<h3>300 km gereden in auto 2</h3>";
$gereden = $auto2->rijden(300);
echo "<p> Er is ".$gereden." km gereden.<br>";
echo "Er zit nu ".$auto2->benzinepeil()." liter benzine in de tank.</p>";

echo "<h3>80 km gereden in auto 3</h3>";
$gereden = $auto3->rijden(80);
echo "<p> Er is ".$gereden." km gereden.<br>";
echo "Er zit nu ".$auto3->benzinepeil()." liter benzine in de tank.</p>";

 ?>
