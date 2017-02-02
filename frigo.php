<?php

// Le tableau ci-dessous représente le contenu du frigo.
/*
a/ définir la fonction afficheStock, qui affiche le contenu du frigo (ne vous préoccupez pas de séparation des concepts ici. Une fonction qui "affiche", fait des `echo`.)
b/ définir la fonction mange qui prend en paramètre un aliment et une quantité:
	- si la quantité restante de l'aliment dans le frigo est suffisante:
		- diminue le stock du type d'aliment spécifié, de la quantité spécifiée
		- affiche le stock
	- sinon
		- affiche une erreur
c/ définir la fonction courses, qui ajoute 4 au stock de chaque aliment du frigo
d/ définir la fonction smartCourses, qui prend comme parametre l'aliment que l'on veut ravitailler et la quantité achetée
(sans utiliser la fonction courses)

- bonus: transformer la fonction smartCourses, pour qu'on puisse lui passer en paramètre un liste de courses
exemple de la liste de courses:
```
$coursesAFaire = [
	"pizza" => 4,
	"glaces" => 8
]
// smartCourses($coursesAFaire);
```
*/

$frigo = [
	"pizza" => 4, 3,1, 5, 9, 3, 0, 4, 1
	"glace" => 8, 4, 8, 12, 9, 6
	"salade" => 2, 6, 3, 7, 4, 1
];

// ces instructions permettent de tester vos fonctions
// a/
// afficheStock();

// b/
// mange("pizza",1);
// mange("pizza",2);
// mange("glace",4);
// mange("salade",3); // => erreur

// c/
// courses();
// mange("salade",3); // => ok
// mange("pizza", 6); // => erreur
// courses();
// mange("pizza", 6); // => ok

// d/
// mange("pizza",3);
// mange("salade",3);
// mange("glace",3);
// smartCourses("pizza", 4); => modifie seulement le stock de pizza
// mange("pizza",3);
// mange("glace",3);
// mange("salade",3);

// bonus
// $coursesAFaire = [
// 	"pizza" => 4,
// 	"glaces" => 8
// ]
// smartCourses($coursesAFaire);
