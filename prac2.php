<?php
// Have to read all date function and format .....
$text="<h1>Data function Handling dates </h1><br><hr>";
echo $text;
$ds=date('dS F Y, g:i A');   // j is with 0 and d is without 0
echo "<br> Tadays date is ".$ds;
echo var_dump(checkdate(12,12,24));
echo "<br><br><hr>";

// Associate arrays....
$favdomain= array('gourav'=>'UI','sourabh'=>'Frontend','sudhir'=>'Backend'); //assign keys and value 
echo $favdomain['sudhir'];
echo "<br>";
echo var_dump($favdomain);
echo "<br><br>";
foreach($favdomain as $key => $value){
    echo "<br> Fav Domain of $key is $value";
}
echo "<br><hr>";

// multi-dimensional Array... Have to read
// IN php Globel variable function is always outside function 
?>

<?php
// 2 ways to connect my sql database : 1-> Using my sqli extention (work only with my sql database, procedure oriented)
// 2-> PDO( php data Object )
// mysqli where i stands for Improve...
/* to connecting databse 

->$servername="";
->$username="";
->$password="";

-> now create a connection object...
 $conn=mysqli_connect($servername,$username,$password);
 if(!conn){
    die("Not connected ,Try Again !" . mysqli_connect_error());
 } else{
    echo "connection is successful ! ";
 }
 */
?>








