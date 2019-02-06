<?php



// var_dump($_POST);
// IF not load continue with code;
include_once 'functions.php';
// if not load stop program;
require 'db_connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  session_start();

  $postEmail= isset($_POST['email']) ? $_POST['email']: "";
  $postPassword= isset($_POST['password']) ? $_POST['password']: "";

  require 'db_getData.php';

  if(mysqli_num_rows($result)>0){
    relocator("welkom.php");
  }

}
