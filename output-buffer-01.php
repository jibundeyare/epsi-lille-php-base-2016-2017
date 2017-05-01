<?php

ob_start();

system('ls -Al');

$result = ob_get_contents();

ob_end_clean();

echo $result . "\n";
