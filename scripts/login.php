<?php
session_start();
require "functions.php";
$login = $_POST['login'];
$password = $_POST['pass'];
try{
    $result = $db -> query("SELECT Username, Pass FROM users WHERE Username = '{$login}'");
}catch(Exception $e){

}
if($result -> num_rows > 0){
    foreach($result as $result){
        if($result['Pass'] == $password){
            header("Location: ../main.php");
        }else{
            $_SESSION["err"] = "Błędny login lub hasło";
            header("Location: ../index.php");
        }
    }
}else{
    $_SESSION["err"] = "Błędny login lub hasło";
    header("Location: ../index.php");
}