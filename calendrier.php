<?php

/*
Ecrivez une fonction qui prend en paramètre un numéro de jour,
de mois et d'année à l'utilisateur, et retourne s'il s'agit ou non
d'une date valide.*/
//$day=$_GET["day"]=0;
//$month=$_GET["month"]=0;
//$year=$_GET["year"]=0;


	 if (empty($day)|| empty($month) ||empty($year)) {
         echo "Date incomplete!  ";
     }

     if (($day>31) || ($month>12)) {
         echo "invalid date! <br> ";
     }
     else {
         echo $day."/".$month."/".$year;
     }

/*Commencez juste par vérifier si le mois est <= 12 et le jour <= 31.
Puis essayez de traiter les cas ci-dessous.

A propos des dates:
Le mois de février compte 28 jours, sauf si l’année est bissextile,
auquel cas il en compte 29. L’année est bissextile si elle est divisible
par quatre. Toutefois, les années divisibles par 100 ne sont pas
bissextiles, mais les années divisibles par 400 le sont. Ouf !

*/
//divisible par 4==>  modulo!
// $year%4==0
//if ($year%4==0)==> alors year bissextiles sauf si ($year%100==0)
$day=$_GET["day"]=28;
$month=$_GET["month"]=2;
$year=$_GET["year"]=2017;


	 if (empty($day)|| empty($month)) {
         echo "Date incomplete!  ";
    }

     if (($day>31) || ($month>12)) {
         echo "invalid date! <br> ";

     }
     else {
         if ((!($year%4==0))|| ($year%100==0) || (!($year%400==0))) {

             if ($day>28) {
                 echo $day."/".$month."/".$year."pas valide";
            }
        }
            else {
                echo $day."/".$month."/".$year."valide";
                }
          }





// echo "<br> 2000,06,31 est "
// echo (dateEstValide(2000,06,31)) ?  : "pas valide";
// echo "<br> 2000,02,29 est "
// echo (dateEstValide(2000,02,29)) ? : "pas valide";
// echo "<br> 2001,02,29 est "
// echo (dateEstValide(2001,02,29)) ? "valide" : "pas valide";
// echo "<br> 1900,02,29 est "
// echo (dateEstValide(1900,02,29)) ? "valide" : "pas valide";
// echo "<br> 1904,02,29 est "
// echo (dateEstValide(1904,02,29)) ? "valide" : "pas valide";
// echo "<br> 2000,02,29 est "
// echo (dateEstValide(2000,02,29)) ? "valide" : "pas valide";
