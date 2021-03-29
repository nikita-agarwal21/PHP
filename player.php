<?php
  class Player
  {
    private $id;
    private $name;
    private $sport;

    public function __construct($id,$name,$sport)
    {
      $this->id = $id;
      $this->name = $name;
      $this->sport = $sport;
    }

    public function display()
    {
       echo $this->id.' '.$this->name.' '.$this->sport.'<br>';
    }

    public function setId($id)
    {
      $this->id = $id;
    }
    public function getId()
    {
      return $this->id;
    }

    public function setName($name)
    {
      $this->name = $name;
    }
    public function getName()
    {
      return $this->name;
    }

    public function setSport($sport)
    {
      $this->sport = $sport;
    }
    public function getSport()
    {
      return $this->sport;
    }
  }
?>