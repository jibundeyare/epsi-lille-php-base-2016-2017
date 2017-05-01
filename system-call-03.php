<?php

$command = 'ls -Al';
$return_var = 0;

passthru($command, $return_var);

echo $command . "\n";
echo $return_var . "\n";
