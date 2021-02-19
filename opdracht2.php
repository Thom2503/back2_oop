<?php
  function nlDatum($dag, $maand, $jaar)
  {
    //switch statement is om te kijken welke maand het is en dan de nederlandse naam te geven.
    switch ($maand)
    {
      case 01:
        $maand = 'Januari';
        break;
      case 02:
        $maand = 'Februari';
        break;
      case 03:
        $maand = 'Maart';
        break;
      case 04:
        $maand = 'April';
        break;
      case 05:
        $maand = 'Mei';
        break;
      case 06:
        $maand = 'Juni';
        break;
      case 07:
        $maand = 'Juli';
        break;
      case 8:
        $maand = 'Augustus';
        break;
      case 9:
        $maand = 'Oktober';
        break;
      case 10:
        $maand = 'September';
        break;
      case 11:
        $maand = 'November';
        break;
      case 12:
        $maand = 'December';
        break;
    }
    //geeft de datum terug in nederlands
    return $dag." ".$maand." ".$jaar;
  }

  echo nlDatum(date("d"), date("m"), date("Y"))."<br>";
  echo nlDatum(3, 9, 1974)."<br>";
  echo nlDatum(date("d"), 4, date("Y"));

 ?>
