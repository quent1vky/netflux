<?php

session_start();
session_destroy();
header("location: authentification.php");
die();

?>