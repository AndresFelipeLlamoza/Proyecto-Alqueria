<?php
session_start();
session_destroy();
header("Location: /proyectoalqueria/");
die();
?>