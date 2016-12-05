<?php

$command = 'ls -Al';
$return_var = 0;

system($command, $return_var);

echo $command . "\n";
echo $return_var . "\n";
