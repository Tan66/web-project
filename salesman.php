<?php
    include "connection.php";

    $tin = $_POST['tin'];
    $sname = $_POST['sname'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $contact = $_POST['contact'];
    
    
    if(!empty($tin) && !empty($sname) && !empty($address1) && !empty($address2) && !empty($contact))
    {
        $sql = "INSERT INTO salesman VALUES('$tin','$sname','$address1','$address2', '$contact')";
        $sql1 = "SELECT * from salesman where tin  = '$tin'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Data is Present');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
            
        $conn->close();   
    }
    if(!empty($tin) && empty($sname) && empty($address1) && empty($address2) && empty($contact))
    {
        $sql = "delete from salesman where tin = '$tin'";
        $sql1 = "SELECT * from salesman where tin  = '$tin'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)==0)
        {
            echo "<script>alert('Data is Not present');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('record deleted');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "salesman.html"';
            echo "</script>";
            
        $conn->close();   
    }
    else
    {
        echo "<script>alert('All fields are required');";
        echo 'window.location= "salesman.html"';
        echo "</script>";
        die();
    }
?>