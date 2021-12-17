<?php 
    $connection = mysqli_connect('localhost','host','','myblog');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection,"SELECT * FROM userdata WHERE email = '$email' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0){
        echo "Signin Successful";
    }
    else{
        echo "No Record Found";
    }
?>