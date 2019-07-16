<?php

include 'db.php';


if(isset($_POST['insert'])){
    
    $name  = clean($_POST['name']);
    $batch = clean($_POST['batch']);
    $email = clean($_POST['email']);
    
    $query = "INSERT INTO `student` (name,batch,email) VALUES ('".escape($name)."','".escape($batch)."','".escape($email)."') ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:../index.php');
    }
    
}


?>