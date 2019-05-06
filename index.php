<?php
$date = date("d-m-Y");
$heure = date("H:i);
Print("Nous sommes le $date et il est $heure");

if($heure > 7 || $heure < 19)
{
  echo '<style> body {
  background-color : #000;
  color : #FFF;}
  </style>';
}

echo '<a href= "./bordeaux.php>"Bordeaux</a>';
echo '<a href= "./bparis.php>"Paris</a>';



?>
  
