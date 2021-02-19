<?php
  function isEven($nummer)
  {
    //als het nummer is even is komt true terug anders
    //komt er false terug.
    if ($nummer % 2 == 0)
    {
      return true;
    } else
    {
      return false;
    }
  }

  //voor het testen om te laten zien.
  function isEvenTest($nummer)
  {
    if ($nummer % 2 == 0)
    {
      echo $nummer." Is even";
    } else
    {
      echo $nummer." Is oneven";
    }
  }

  echo isEven(5)."<br>";
  isEvenTest(5);
  echo "<br>";
  isEvenTest(2);
 ?>
