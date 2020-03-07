<?php
    include "connection.php";

    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $location = $_POST['location'];
    $vehicle = $_POST['vehicle'];
    $contact = $_POST['contact'];
    
    
    if(!empty($tid) && !empty($tname) && !empty($location) && !empty($vehicle) && !empty($contact))
    {
        $sql = "INSERT INTO transport VALUES('$tid','$tname','$location','$vehicle', '$contact')";
        $sql1 = "SELECT * from transport where tid  = '$tid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Data is Present');";
            echo 'window.location= "transport.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "transport.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "transport.html"';
            echo "</script>";
            
        $conn->close();   
    }
    if(!empty($tid))
    {
        $sql = "delete from transport where tid = '$tid'";
        $sql1 = "SELECT * from transport where tid  = '$tid'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)==0)
        {
            echo "<script>alert('Data is Not present');";
            echo 'window.location= "transport.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('record deleted');";
            echo 'window.location= "transport.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "transport.html"';
            echo "</script>";
            
        $conn->close();   
    }
    else
    {
        echo "<script>alert('All fields are required');";
        echo 'window.location= "transport.html"';
        echo "</script>";
        die();
    }
?>