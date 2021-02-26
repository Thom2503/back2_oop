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
      if ($datum != null)
      {
        $datum = date("Y-m-d", strtotime($datum));
      } else
      {
        $datum = date("Y-m-d");
      }
      return $this->laatsteOnderhoud = "{$datum}";
    }

  }

 ?>
