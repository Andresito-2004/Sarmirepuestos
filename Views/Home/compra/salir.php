<?php

session_start();

session_destroy();

header("location: ../inicio/pagina_login.php");
exit();


?>