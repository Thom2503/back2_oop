<?php
  function berekenKamer($lengte, $breedte, $hoogte = "")
  {
    //maakt de string naar een int
    $lengte = intval($lengte);
    $breedte = intval($breedte);

    //maak de berekening
    $som = $lengte * $breedte;

    if ($hoogte > 0)
    {
      $hoogte = intval($hoogte);
      $som = $lengte * $breedte * $hoogte;
    }

    //geef de uiteindelijke som terug
    return $som;
  }

  $nummer1 = 4;
  $nummer2 = 5;
  $nummer3 = 8;

  echo "De test getallen zijn: ".$nummer1.", ".$nummer2." en ".$nummer3."<br>";

  echo "De oppervlakte is: ".berekenKamer($nummer1, $nummer2)."<br>";
  echo "De inhoud is: ".berekenKamer($nummer1, $nummer2, $nummer3);
 ?>
