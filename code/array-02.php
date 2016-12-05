<?php

function toto() {
	return array(3.14, 'toto', 123);
}

// récupération d'éléments d'un tableau avec list()
list($var1, $var2, $var3) = toto();

echo $var1 . "\n";
echo $var2 . "\n";
echo $var3 . "\n";
