<?php

$t = array(3.14, 123, 'toto');

var_dump($t);
echo "\n";

var_export($t);
echo "\n";
echo "\n";

print_r($t);

$r = print_r($t, true);
echo "\n";

echo $r . "\n";
