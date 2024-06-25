<?php 

$server="127.0.0.1";
$username="root";
$password="";
$dbname="project1";

$box=mysqli_connect($server,$username,$password,$dbname);

if($box->connect_error){
  echo "error";
}


?>