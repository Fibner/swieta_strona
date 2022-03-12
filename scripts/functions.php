<?php
require "Class/Gift.php";
require "Class/User.php";

$db = new mysqli('localhost', 'root', '', '3tip_g_swiateczna');


function getUsers(){
    $result = $GLOBALS['db']->query("SELECT users.ID AS userID, users.Username, gifts.ID AS giftID, gifts.Name FROM users LEFT JOIN usersAndGifts ON users.ID = usersAndGifts.UserID LEFT JOIN gifts ON gifts.ID = usersAndGifts.GiftID");
    foreach($result as $dane){
        $listOfUsers[] = new User($dane["userID"], $dane["Username"], getUserPresents($dane["userID"]));
    }
    $GLOBALS['db']-> Close();
    return $listOfUsers;
}

function getUserPresents(int $id)
{
    $result = $GLOBALS['db']->query("SELECT gifts.ID AS giftID, gifts.Name, gifts.Price, gifts.Color FROM users LEFT JOIN usersAndGifts ON users.ID = usersAndGifts.UserID LEFT JOIN gifts ON gifts.ID = usersAndGifts.GiftID WHERE users.ID = {$id}");
    foreach($result as $dane){
        $listOfUserGifts[] = new Gift($dane["Name"], $dane["Price"], $dane["Color"]);
    }
    //$GLOBALS['db']-> Close();
    return $listOfUserGifts;
}

function getPresents($gender){
    $listOfGifts = [];
    $result = $GLOBALS['db']->query("SELECT * FROM gifts WHERE Gender = '{$gender}'");
        foreach($result as $dane){
            $listOfGifts[] = new Gift($dane["Name"], $dane["Price"], $dane["Color"]);
        }
    $GLOBALS['db']-> Close();
    return $listOfGifts;
}

function translateColor($color){
    switch($color){
        case "red":
            $color = "Czerwony";
            break;
        case "blue":
            $color = "Niebieski";
            break;
        case "yellow":
            $color = "Żółty";
            break;
        case "green":
            $color = "Zielony";
            break;
        default:
            break;
    }
    return $color;
}

function createTable($type){
    $html = "<table>";
    $list = [];
    $list = getPresents($type);
    $html .= "<tr><td>LP</td><td>Nazwa</td><td>Cena</td><td>Kolor opakowania</td></tr>";
    for ($i = 1; $i < count($list)+1; $i++) {
        $html .= "<tr class='item' onclick='slide($i)'><td>$i</td><td>{$list[$i-1]->Name}</td><td>{$list[$i-1]->Price}</td><td style='color: {$list[$i-1]->Color}'>".translateColor($list[$i-1]->Color)."</td></tr>";
        $html .= "<tr style='padding: 20px; display: none' id='info$i'><td colspan='4'>Dodaj prezent użytkownikowi: <select></select></td></tr>";
    }
    $html .= "</table>";
    echo $html;
}

function createUsersTable(){
    $html = "<table>";
    $list = [];
    $list = getUsers();
    $html .= "<tr><td>LP</td><td>Nazwa użytkownika</td><td>Email</td></tr>";
    for ($i = 1; $i < count($list)+1; $i++) {
        $html .= "<tr class='item' onclick='slide($i)'><td>$i</td><td>{$list[$i-1]->Name}</td><td>{$list[$i-1]->Price}</td><td style='color: {$list[$i-1]->Color}'>".translateColor($list[$i-1]->Color)."</td></tr>";
        $html .= "<tr style='padding: 20px; display: none' id='info$i'><td colspan='4'>Dodaj prezent użytkownikowi: <select></select></td></tr>";
    }
    $html .= "</table>";
    echo $html;
}