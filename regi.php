
<?php
include 'link.php';
if(isset($_POST['submit'])){
// now store the data inside database....
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    // Now Write insert Query..

    $sql="insert into `data`(name,email,mobile,password) values('$name','$email','$mobile','$password')";
    // to execute this query..create variable as result

    $result=mysqli_query($conn,$sql);
    // this varialbe pass mysqli query method and this taking 2 parameter(conn,sql)
    // now check codition
    if($result){
        //echo "Data is Inserted Successfully !";
        header('location:disp.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <style>
    #reset.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0b5ed7;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd
    }

  </style>

  </head>
  <body>
 <div class="container my-5" > <!-- my-5 class add top and bottom margin--->

 <form method="post"> <!-- Action not giving becoz it will be perform same page --->
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"placeholder="Insert your name"name="name" autocomplete="off" >
</div>

<div class="mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control"placeholder="Insert your Email"name="email" autocomplete="off">
</div>

<div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control"placeholder="Insert your Mobile Number"name="mobile" autocomplete="off">
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control"placeholder="Insert your Password"name="password" autocomplete="off">
</div>



  <button type="submit" class="btn btn-primary" name="submit">Save</button>
  <button type="reset" class="btn btn-primary" id="reset">Reset</button>

</form>


 </div>

  </body>
</html>