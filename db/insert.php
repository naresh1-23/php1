<?php
    include('connect.php');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact =$_POST["contact"];
    if($name ==""){
        $msg="name is required";
    }
    elseif($email==""){
        $msg = "email is required";
    }
    elseif($contact == ""){
        $msg = "contact is required";
    }
    else{
        $query = "INSERT INTO contact(name, contactno, email) VALUES('$name', '$contact', '$email')";
        if(mysqli_query($con, $query)){
            $msg = "inserted";
        }
        else{
            $msg = "error occured".mysqli_error($con);
        }
    }
    header('location:../view.php?msg='.$msg);
    
?>