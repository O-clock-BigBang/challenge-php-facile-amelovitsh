<?php

/*
Ecrivez une fonction qui prend en paramètre un numéro de jour,
de mois et d'année à l'utilisateur, et retourne s'il s'agit ou non
d'une date valide.

Commencez juste par vérifier si le mois est <= 12 et le jour <= 31.
Puis essayez de traiter les cas ci-dessous.

A propos des dates:
Le mois de février compte 28 jours, sauf si l’année est bissextile,
auquel cas il en compte 29. L’année est bissextile si elle est divisible
par quatre. Toutefois, les années divisibles par 100 ne sont pas
bissextiles, mais les années divisibles par 400 le sont. Ouf !

*/


// echo "<br> 2000,06,31 est "
// echo (dateEstValide(2000,06,31)) ? "valide" : "pas valide";
// echo "<br> 2000,02,29 est "
// echo (dateEstValide(2000,02,29)) ? "valide" : "pas valide";
// echo "<br> 2001,02,29 est "
// echo (dateEstValide(2001,02,29)) ? "valide" : "pas valide";
// echo "<br> 1900,02,29 est "
// echo (dateEstValide(1900,02,29)) ? "valide" : "pas valide";
// echo "<br> 1904,02,29 est "
// echo (dateEstValide(1904,02,29)) ? "valide" : "pas valide";
// echo "<br> 2000,02,29 est "
// echo (dateEstValide(2000,02,29)) ? "valide" : "pas valide";
