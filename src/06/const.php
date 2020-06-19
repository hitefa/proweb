<?php
const PI = 3.14;
define("GRAVITY_FORCE",9.8);

echo constant("PI");
echo PHP_EOL;

echo PI;
function luas_lingkaran(){
   $r = 21;
   $luas = PI * $r * $r;
   echo PHP_EOL;
   echo "Luas lingkaran dengan R=$r adalah $luas".PHP_EOL;
}

function berat_badan(){
   $berat = 75; //Kg
   $massa = $berat / GRAVITY_FORCE;
   echo PHP_EOL;
   echo "Massa dari berat badan saya adalah $massa". PHP_EOL;
}

luas_lingkaran();
berat_badan();
