<?php

  require_once "flight/Flight.php";

  require_once "api.php";

  Flight::route("POST /login","login");

  Flight::start();

 ?>
