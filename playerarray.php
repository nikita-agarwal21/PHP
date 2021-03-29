<?php
  require 'Player.php';

  $players = array();

  $player1 = new Player(1,"John","Tennis");  
  $player2 = new Player(2,"Richard","Badmington");  
  $player3 = new Player(3,"Miller","Athletics");  

  $players[] = $player1;
  $players[] = $player2;
  $players[] = $player3;

  foreach ( $players as $player )
  {
    $player->display();
  }
?>
