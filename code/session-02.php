<pre>
<?php

session_start();

// initialisation de la clé
$_SESSION['test'] = 123;
$_SESSION['foo'] = 'bar';

var_dump($_SESSION);
?>
</pre>
