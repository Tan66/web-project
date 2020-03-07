<?php
    include "connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
        $sql = "SELECT name,password from login1 WHERE name='$username' and password='$password' ";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)>0)
        {
            include "main.html";
        }
        else
        {
            echo "<script>alert('Give correct details');";
            echo 'window.location= "login.html"';
            echo "</script>";
        }
    }
    else{
        echo "<script>alert('All fields are required');";
        echo 'window.location= "login.html"';
        echo "</script>";    
        die();
    }
?>