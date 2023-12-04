<?php

include('dbconfig.php');

if(isset($_POST['register_btn']))
{
    $Fname = $_POST['first_name'];
    $Lname = $_POST['last_name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Mobile = $_POST['mobile'];

    $query = "INSERT INTO user_register (fname,lname,email,password,mobile) VALUES ('$Fname','$Lname','$Email','$Password','$Mobile')";

    $result=mysqli_query($conn ,$query);

    if($result){
        // echo "User Register Successfully";
        $_SESSION['status'] = "User Register Successfully";
        $_SESSION['status_code'] = "success";
        header("refresh:0;url=index.php" );
    }
    else{
        // echo "Sorry!! Something Went Wrong";
        $_SESSION['status'] = "Sorry!! Something Went Wrong";
        $_SESSION['status_code'] = "error";
        header("refresh:0;url=register.php" );
    }

}


if(isset($_POST['register_Update_btn'])){
    $Update_id = $_POST['update_id'];
    $Fname = $_POST['first_name'];
    $Lname = $_POST['last_name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Mobile = $_POST['mobile'];

    $query = "UPDATE user_register SET fname = '$Fname', lname = '$Lname',email = '$Email',password = '$Password',mobile = '$Mobile' Where id = '$Update_id' ";

    $result = mysqli_query($conn , $query);

    if($result){
        // echo "User Data Updated";
        $_SESSION['status'] = "User Data Updated";
        $_SESSION['status_code'] = "success";
        header("refresh:0;url=index.php" );
    }
    else{
        // echo "Sorry!! Something Went Wrong Data Not Updated";
        $_SESSION['status'] = "Sorry!! Something Went Wrong Data Not Updated";
        $_SESSION['status_code'] = "error";
        header("refresh:0;url=index.php" );
    }

}

if(isset($_POST['register_delete_btn'])){
    $delete_id = $_POST['delete_id'];
    
    // $query = "DELETE FROM user_register Where id='$delete_id' ";
    $query = "UPDATE user_register SET status = '0' Where id = '$delete_id' ";

    $result = mysqli_query($conn , $query);

    if($result){
        // echo "User Data Deleted";
        $_SESSION['status'] = "User Data Deleted";
        $_SESSION['status_code'] = "success";
        header("refresh:0;url=index.php" );
    }
    else{
        // echo "Sorry!! Something Went Wrong User Data Not Deleted";
        $_SESSION['status'] = "Sorry!! Something Went Wrong User Data Not Deleted";
        $_SESSION['status_code'] = "error";
        header("refresh:0;url=index.php" );
    }

}