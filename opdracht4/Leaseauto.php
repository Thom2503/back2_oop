<?php
  require 'auto.php';
  class Leaseauto extends Auto
  {
    public $leaseMaatschappij;
    public $start_contract;
    public $eind_contract;

    private $laatsteOnderhoud;

    public function getOnderhoud()
    {
      return $this->laatsteOnderhoud;
    }

    public function doeOnderhoud($datum = null)
    {
      if (!$datum)
      {
        $datum = date("Y-m-d", strtotime($datum));

        $this->laatsteOnderhoud = $datum;
      } else
      {
        $datum = date("Y-m-d");

        $this->laatsteOnderhoud = $datum;
      }
    }

  }

 ?>
