<?php
require "Class/Gift.php";
require "Class/User.php";

$db = new mysqli('localhost', 'root', '', '3tip_g_swiateczna');


function getUsers($db){
    $result = $db->query("SELECT * FROM users INNER JOIN usersAndGifts ON users.ID = usersAndGifts.UserID INNER JOIN gifts ON usersAndGifts.GiftID = gifts.ID");
    var_dump($result);
}

function getPresents(){
    $listOfGifts = [];
    $result = $GLOBALS['db']->query("SELECT * FROM gifts");
        foreach($result as $dane){
            $listOfGifts[] = new Gift($dane["Name"], $dane["Price"], $dane["Color"]);
        }
    $GLOBALS['db']-> Close();
    return $listOfGifts;
}

function createTable($type){
    $html = "<table>";
    $list = [];
    switch($type){
        case "her":
            $list = getPresents();
            $html .= "<tr><td>LP</td><td>Name</td><td>Price</td><td>Color</td></tr>";
            for ($i = 1; $i < count($list)+1; $i++) {
                $html .= "<tr class='item' onclick='slide($i)'><td>$i</td><td>{$list[$i-1]->Name}</td><td>{$list[$i-1]->Price}</td><td>{$list[$i-1]->Color}</td></tr>";
                $html .= "<tr style='padding: 20px; display: none' id='info$i'><td colspan='4'>Extra info sratatatav</td></tr>";
            }
            break;
        default:
            break;
    }
    $html .= "</table>";
    echo $html;
}