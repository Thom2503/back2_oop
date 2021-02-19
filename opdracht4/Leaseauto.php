<?php
  class Leaseauto extends Auto
  {
    public $leaseMaatschappij;
    public $start_contract;
    public $eind_contract;

    private $laatsteOnderhoud;

    public function doeOnderhoud($datum)
    {
      $datum = strtotime($datum);

      $this->laatsteOnderhoud = $datum;
    }

    public function getOnderhoud()
    {
      return $this->laatsteOnderhoud;
    }
  }

 ?>
