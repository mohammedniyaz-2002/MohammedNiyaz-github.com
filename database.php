<?php
    $a = $_POST['Username'];
    $b = $_POST['Email_ID'];
    $c = $_POST['Content'];
    $d = $_POST['faces'];
    
    $con = mysqli_connect("localhost","root","","Resume Building");
    $info = "INSERT INTO feedback(Username,Email_ID,Content,Reactions) values ('$a','$b','$c','$d')";
    $check = mysqli_query($con,$info);
    if($check){
        echo "successfull";
    }
    else{
        echo "failed";
    }
?>