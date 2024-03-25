<?php
include 'link.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];  // access id from url

    // now writing delete sql query..

    $sql="delete from `data` where sno=$id";  // should with database..
    // to execute this query creating variable
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted Successfully";
        header('location:disp.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>