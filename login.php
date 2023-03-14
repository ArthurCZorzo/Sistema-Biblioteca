<?php
    include("conx-banco.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $statement = $conn->query("SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'");
        if($statement->num_rows == 1){
            $infoUser = $statement -> fetch_array(MYSQLI_NUM);
            if(!isset($_SESSION)){
                session_start();
            }
            header("Location: index.php");
            $_SESSION['ID'] = $infoUser[0]; 

        } else {
            echo "<script>alert('Email and/or Password Incorrect');</script>";
            header("Location: login.html");
        }
    } else {
        print("Something went wrong");
    }
?>