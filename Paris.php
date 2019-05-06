<?php

if($heure > 7 || $heure < 19)
{
  echo '<style> body {
  background-color : #000;
  color : #FFF;}
  </style>';
}


for ($i = 0; $i < 5; $i++)
{
  echoc '<img src= "https://www.prevision-meteo.ch/uploads/widget/paris_' .$i '.png">'
}

?>
