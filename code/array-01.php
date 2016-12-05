<?php

// initalisation d'un tableau vide
$t = array();

// ajout d'éléments
$t[] = 123;
$t[] = 3.14;
$t[] = true;
$t[] = 'lorem ipsum';
$t[] = new DateTime();

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// lecture
echo $t[4]->format('d/m/Y H:i:s') . "<br />\n";

// écriture
$t[0] = 42;

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// réaffectation
$t = array(
	'toto',
	'4321',
	false,
	1.6180339887,
	'sic dolores'
);

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// suppression d'un index avec unset()
unset($t[0]);

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// suppression d'un index avec array_splice()
array_splice($t, 1, 1);

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// ajout d'un élément avec clé alpha-num
$t['nombre'] = 123;

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

// lecture
echo $t['nombre'] . "<br />\n";

// reindexation des index numériques
array_splice($t, 0, 0);

// inspection
echo '<pre>';
var_dump($t);
echo '</pre>';

