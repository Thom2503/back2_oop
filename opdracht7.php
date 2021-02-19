<?php
  require 'opdracht4/auto.php';

  //__construct($merk, $type, $kleur, $tankInhoud, $verbruik, $kenteken, $benzine = 0, $kilometers = 0, $heeftTrekhaak = false)
  $auto1 = new auto('Mazda', 'RX-7', 'Veilside Oranje', 55, 11, "vd- 365- B");
  // $auto2 = new auto();
  // $auto3 = new auto();

  echo "De eerste auto is een ". $auto1->merk .":<br>";
  foreach ($auto1 as $value) {
    echo "$value<br>";
  }

  echo $auto1->getKenteken();
  echo "<br>";

  echo "<h3>10 Liter tanken in auto 1</h3>";
  $verspild = $auto1->tanken(10);
  echo "<p> Er is ".$verspild." liter benzine verspild<br>";
  echo "Er zit nu ".$auto1->benzinepeil()." liter benzine in de tank.</p>";

  echo "<h3>80 km gereden in auto 3</h3>";
  $gereden = $auto1->rijden(80);
  echo "<p> Er is ".$gereden." km gereden.<br>";
  echo "Er zit nu ".$auto1->benzinepeil()." liter benzine in de tank.</p>";

 ?>
