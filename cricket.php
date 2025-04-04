<?php 
$xml = simplexml_load_file('cricket.xml');
 echo "<h2>players who have scored more than 1200 runs and at least 50 wickets. </h2>";
  echo "<ul>"; foreach ($xml->player as $player)
   {     if ((int)$player->runs > 1200 && (int)$player->wickets >= 50) 
    {       
      echo "<li>{$player->name} - Runs: {$player->runs}, Wickets: {$player->wickets}</li>"; 
    } 
} 
echo "</ul>"; 
?> 
