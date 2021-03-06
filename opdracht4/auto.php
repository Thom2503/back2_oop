<?php
  class auto
  {
    public $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak = false;

    private $kenteken;
    private $kilometers = 0;
    public $tankInhoud;
    private $benzine = 0;
    public $verbruik;

    public function __construct($merk, $type, $kleur, $tankInhoud, $verbruik, $kenteken, $benzine = 0, $kilometers = 0, $heeftTrekhaak = false)
    {
      //de tellers op nul
      //$this->kilometers = 0;
      //$this->benzine = 0;
      $this->kilometers = $kilometers;
      $this->benzine = $benzine;

      //sla de parameters op
      $this->merk = $merk;
      $this->type = $type;
      $this->kleur = $kleur;
      $this->heeftTrekhaak = $heeftTrekhaak;
      $this->verbruik = $verbruik;
      $this->tankInhoud = $tankInhoud;
      $this->kenteken = $kenteken;
    }

    public function kilometerstand()
    {
      return $this->kilometers;
    }

    public function getKenteken()
    {
      //geef het kenteken
      return $this->kenteken;
    }

    public function setKenteken($kenteken)
    {
      //maakt alles hoofdletters
      $kenteken = strtoupper($kenteken);
      //verwijderd alles wat geen getal, letter of streepje is
      $kenteken = preg_replace('/[^A-Z0-9\-]/', '', $kenteken);
      //sla het kenteken op
      $this->kenteken = $kenteken;
    }

    public function tanken($liters)
    {
      //aantal liters aan de tank toevoegen
      $this->benzine += $liters;

      if ($this->benzine > $this->tankInhoud)
      {
        //bereken hoeveel er te veel is getanked
        $teveel = $this->benzine - $this->tankInhoud;

        //de tank zit vol met benzine
        $this->benzine = $this->tankInhoud;

        return $teveel;
      } else
      {
        return 0;
      }
    }

    public function rijden($km)
    {
      //max te rijden kilometers
      $maxKM = $this->benzine / $this->verbruik * 100;

      //checked of de gereden km wel echt gereden kan worden
      if ($km <= $maxKM)
      {
        //het aantal km wordt verhoogd
        $this->kilometers += $km;

        //verbruk word berekend
        $verbruikt = ($km / 100) * $this->verbruik;

        //het verbruikte word uit de tank gehaald
        $this->benzine -= $verbruikt;

        return $km;
      } else
      {
        //het aantal km wordt verhoogd
        $this->kilometers += $maxKM;

        //verbruk word berekend
        $verbruikt = ($maxKM / 100) * $this->verbruik;

        //het verbruikte word uit de tank gehaald
        $this->benzine -= $verbruikt;

        return $maxKM;
      }
    }

    public function benzinepeil()
    {
      return $this->benzine;
    }

  }

 ?>
