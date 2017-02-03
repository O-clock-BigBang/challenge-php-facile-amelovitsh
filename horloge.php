<?php
/*
Écrire une fonction qui prend en paramètres l'heure, les minutes, les secondes, puis affiche l'heure qu'il sera une seconde plus tard.
ex:
`nextSecond(23, 12, 59);
// =>  "Dans une seconde, il sera 23 heure(s), 13 minute(s) et 0 seconde(s)".`

*/
$time=date(H,i,s);

function nextSecond($H,$i,$S){

	$H=date("H");
	$i=date("i");
	$S=date("s");

	 $next=$time+mktime(date("H"),date("i"),date("s")+1);
	 return $next;
}
echo "Dans une seconde, il sera " .$next;
?>
