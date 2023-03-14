<?php
    include("conx-banco.php");

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassoword = $_POST['confirmedPassword'];
        $accessLvl = 1;

        if($password == $confirmedPassoword){
            $statement = "INSERT INTO users(user_name, user_email, user_password, access_id) VALUES('$name','$email', '$password', '$accessLvl')";

            $result = mysqli_query($conn, $statement);
            if($result === TRUE){
                echo "<script>alert('Registered with success');</script>";
                header("Location: login.html");
            } else{
                echo "<script>alert('Something went wrong');</script>";
                header("Location: register.html");
            }   
        } else {
            print "<p>Passwords HAVE to be the same</p>";
            header("Location: register.html");
        }
    }
?>