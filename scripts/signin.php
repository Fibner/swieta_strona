<?php
if(!isset($_POST["login"]) || $_POST["login"] == "" || !isset($_POST["password"]) || $_POST["password"] == ""){
    header("Location: ../main");
}
require "functions.php";
if(isset($_POST['email']) && $_POST['email'] != ""){
    try{
        $db -> query("INSERT INTO users (Username, Pass, Email) VALUES ('{$_POST['login']}', '{$_POST['password']}', '{$_POST['email']}')");
    }catch(Exception $e){}
}else{
    try{
        $db -> query("INSERT INTO users (Username, Pass) VALUES ('{$_POST['login']}', '{$_POST['password']}')");
    }catch(Exception $e){}
}
