<?php
include 'link.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Opeartion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
   
</head>
<body>

<div class="container">

<button class="btn btn-primary my-5"><a href="regi.php"class="text-light"style="text-decoration:none">Add User</a>

</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<!-- from here I have to display data so for it we write php (selecting data from database) write sql query--->
<?php
$sql="select * from `data`";
// Now to execute this query creating variable(result)which consist/pass 2 parameter
$result=mysqli_query($conn,$sql);
//Now check execution 

/*if($result){
    //result is true then print all data by mysqli_ftech_assoc
    $row=mysqli_fetch_assoc($result);
    echo $row['name'];
}*/

// do it while loop ..

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['sno'];     // should be match with databse column no.
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-secondary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
     
    }
}

?>


  </tbody>
</table>

</div>
    
</body>
</html>