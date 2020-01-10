<?php
session_start();

  $_SESSION["username"]="toto";

die("Username =".$_SESSION["username"]);
?>
