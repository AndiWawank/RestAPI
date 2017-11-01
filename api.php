<?php

  function login(){
    $param = array();
      if( !isset($_POST['username']) ){
        array_push($param, 'username');
      }
      if( !isset($_POST['password']) ){
        array_push($param, 'password');
      }
        reportMissingParameters($param);

        $username = $_POST['username'];
        $password = $_POST['password'];

          FLight::json(array(
            "code"     => 0,
            "message"  => "Success",
            "data"     => array(
            "username" => $username,
            "realname" => "AndiWawanK"
            )
          ));
  }
  function reportMissingParameters($param){
    $parameter = implode(", ", $param);

    Flight::json(array(
      "code" => 1,
      "meesage" => "Parameter is missing: ".$parameter.".",
      "data" => null
    ));
    exit();
  }

 ?>
