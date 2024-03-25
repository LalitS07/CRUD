<?php

$servername="localhost";
$username="root";
$password="";
$database="profi";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Not connected ,Try Again " . mysqli_connect_error());
}
//else{
 //   echo "Successfully connected ! ";



// create database...by writing query

//$sql="CREATE DATABASE profi";
// execute query...

//$result=mysqli_query($conn,$sql);

// checking creation of database.....
//if($result){
//    echo "Database is created ";
//}else{
  //  echo "NOt Created Due to -----> ". mysqli_error($conn);
//}
// also we can create a table here through sql query....
// ex: $sql="INSERT INTO 'profi' (`sno`,`name`,`age`)";


?>
