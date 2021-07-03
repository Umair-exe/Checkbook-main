<?php
session_start();
require 'connection.php';


if($stmt=$conn->prepare('SELECT id,companyName,email,password,fullName FROM users where username=?')) {
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0) {
        $stmt->bind_result($id,$companyName,$email,$password,$fullname);
        $stmt->fetch();

        if(password_verify($_POST['password'],$password)) {
            $_SESSION['loggedIn']= true;
            $_SESSION['id']=$id;
            $_SESSION['companyName']=$companyName;
            $_SESSION['email']=$email;
            $_SESSION['fullname']=$fullname;
            $_SESSION['password']=$password;     

            header('location:dashboard.php?message=login_successfully');
        }
        else {
            header('location:login.php?message=incorrect_password');
        }
    }
    else {
        header('location:login.php?message=incorrect_username');
    }
}

else {
    echo "empty";
}
