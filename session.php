<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['ID'])){
        die("NOT CONNECTED<a href='login.html'>");
    }

    /*if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array();
    }*/
?>