<?php

function get_file(string $filePath)
{
  $string = file_get_contents($filePath);
  $json = json_decode($string, true);
  return $json;
}

function load_template(string $templateName, array $variables = [])
{
  extract($variables);
  ob_start();
  include("./element/{$templateName}.phtml");
  return ob_get_clean();
}

function open_db(){
  $servername = "localhost";
  $database = "shopping_site";
  $username = "";
  $password = "";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  return $conn;
  // // Check connection
  
  // if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
  // }
  
  // echo "Connected successfully";
  
  // mysqli_close($conn);
}

function close_db($conn){
  mysqli_close($conn);
}

?>