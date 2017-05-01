<pre>
<?php

session_start();

// suppression de la clé
unset($_SESSION['test']);

var_dump($_SESSION);
?>
</pre>
