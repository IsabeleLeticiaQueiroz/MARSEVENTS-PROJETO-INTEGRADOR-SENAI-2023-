<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bancoDeDados ="marsevents";

$conn = new mysqli($host,$usuario,$senha,$bancoDeDados);

if ($conn->connect_error)
{
   echo "Error connecting to server";  
}else{
  //echo "Connection established";
}
?>