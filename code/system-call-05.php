<?php

$param = "; rm -fr /";
$command = 'dir ' . $param;

$command = escapeshellcmd($command);
$output = array();
$return_var = 0;

exec($command, $output, $return_var);

echo $command . "\n";
echo join($output, "\n") . "\n";
echo $return_var . "\n";
