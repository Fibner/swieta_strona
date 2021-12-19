<?php
if(!isset($_POST['login']) || $_POST['login'] == "" || !isset($_POST['pass']) || $_POST['pass'] == ""){
    header("Location: ../index");
}
session_start();
session_unset();
require "functions.php";
$login = $_POST['login'];
$password = $_POST['pass'];
try{
    $result = $db -> query("SELECT Username, Pass, Email FROM users WHERE Username = '{$login}' OR Email = '{$login}'");
    var_dump($result);
}catch(Exception $e){

}
if($result -> num_rows > 0){
    foreach($result as $result){
        if($result['Pass'] == $password){
            $_SESSION['isLogged'] = true;
            header("Location: ../main");
        }else{
            header("Location: ../index");
            $_SESSION['isLogged'] = false;
            $_SESSION['errpass'] = "Błędny login lub hasło!";
        }
    }
}else{
    header("Location: ../index");
    $_SESSION['isLogged'] = false;
    $_SESSION['errpass'] = "Błędny login lub hasło!";
}