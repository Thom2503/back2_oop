<?php
  require 'opdracht4/Leaseauto.php';

  //__construct($merk, $type, $kleur, $tankInhoud, $verbruik, $kenteken, $benzine = 0, $kilometers = 0, $heeftTrekhaak = false)
  $auto1 = new Leaseauto("Nissan", "Sylvia", "Mat Grijs", 55, 11, "vd- 365- B");
  $auto1->tanken(80);
  $auto1->rijden(400);
  $auto1->leaseMaatschappij = "Arval";
  $auto1->doeOnderhoud();
  $auto1->getOnderhoud();

  echo "De eerste auto is een ". $auto1->merk .":<br>";
  foreach ($auto1 as $value) {
    echo "$value<br>";
  }
 ?>
