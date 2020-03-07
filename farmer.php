<?php
    include "connection.php";

    $fid = $_POST['fid'];
    $fname = $_POST['fname'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $crop = $_POST['crop'];
    $price = $_POST['price'];

    if(!empty($fid) && !empty($fname) && !empty($location) && !empty($contact)&& !empty($crop)&& !empty($price))
    {
        $sql = "INSERT INTO farmer VALUES('$fid','$fname','$location','$contact','$crop', '$price')";
        $sql1 = "SELECT * from farmer where fid  = '$fid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Data is Present');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
            
        $conn->close();   
    }
    if(!empty($fid) && empty($fname) && empty($location) && empty($contact)&& empty($crop)&& empty($price))
    {
        $sql = "delete from farmer where fid = '$fid'";
        $sql1 = "SELECT * from farmer where fid  = '$fid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)==0)
        {
            echo "<script>alert('Data is Not present');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('record deleted');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "farmer.html"';
            echo "</script>";
            
        $conn->close();   
    }
    else
    {
        echo "<script>alert('All fields are required');";
        echo 'window.location= "farmer.html"';
        echo "</script>";
        die();
    }
?>