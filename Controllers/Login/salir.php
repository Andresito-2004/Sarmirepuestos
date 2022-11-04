<?php

session_start();

session_destroy();

header("location: ../../views/home/Iniciar_sesion/pagina_login.php");
exit();


?>