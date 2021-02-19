<?php
  require 'auto.php';
  class Leaseauto extends Auto
  {
    public $leaseMaatschappij;
    public $start_contract;
    public $eind_contract;

    private $laatsteOnderhoud;

    public function doeOnderhoud($datum = "")
    {
      if ($datum > 0)
      {
        $datum = date("Y-m-d", strtotime($datum));

        $this->laatsteOnderhoud = $datum;
      }
      $datum = getdate();

      $this->laatsteOnderhoud = $datum;
    }

    public function getOnderhoud()
    {
      return $this->laatsteOnderhoud;
    }
  }

 ?>
