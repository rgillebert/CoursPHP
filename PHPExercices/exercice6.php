<?php
function random($car) {
$string = "";
$chaine = "abcdefghijklmnpqrstuvwxy0123456789";
srand((double)microtime()*1000000);
for($i=0; $i<$car; $i++) {
$string .= $chaine[rand()%strlen($chaine)];
}
return $string;
}

// APPEL
// Génère une chaine de longueur 20
$chaine = random(11);
echo $chaine;

?>
