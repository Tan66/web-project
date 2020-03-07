<?php
    include "connection.php";

    $bid = $_POST['bid'];
    $bname = $_POST['bname'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
       
    if(!empty($bid) && !empty($bname) && !empty($location) && !empty($contact))
    {
        $sql = "INSERT INTO branch VALUES('$bid','$bname','$location','$contact')";
        $sql1 = "SELECT * from branch where bid  = '$bid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Data is Present');";
            echo 'window.location= "branch.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "branch.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "branch.html"';
            echo "</script>";
            
        $conn->close();   
    }
    if(!empty($bid) && empty($bname) && empty($location) && empty($contact))
    {
        $sql = "delete from branch where bid = '$bid'";
        $sql1 = "SELECT * from branch where bid  = '$bid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)==0)
        {
            echo "<script>alert('Data is Not present');";
            echo 'window.location= "branch.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('record deleted');";
            echo 'window.location= "branch.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "branch.html"';
            echo "</script>";
            
        $conn->close();   
    }
    else
    {
        echo "<script>alert('All fields are required');";
        echo 'window.location= "branch.html"';
        echo "</script>";
        die();
    }
?>