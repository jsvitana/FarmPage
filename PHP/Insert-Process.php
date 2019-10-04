<?php
// connect to database//////////////////////////////////////
$dbhost = "127.0.0.1:3307"; //SET TO LOCALHOST
$dbuser = "root";
$dbpass = "";
$db = "farm_database";

//connect
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
////////////////////////////////////////////////////////////

$type = $_REQUEST['type'];

if($type == "fin") {
    $finHay = $_REQUEST["finHay"];
    $finCow = $_REQUEST["finCow"];
    $finRep = $_REQUEST["finRep"];
    $finQuarter = $_REQUEST["finQuarter"];
    $finYear = $_REQUEST["finYear"];

    $sql = "INSERT INTO farm_database.finances (financeHay, financeCattle, financeRepairs, quarter, year)
            VALUES ('$finHay', '$finCow', '$finRep', '$finQuarter', '$finYear')";
    $result = $conn->query($sql);
}

if($type == "hay") {
    $hayType = $_REQUEST["hayType"];
    $hayCurr = $_REQUEST["hayCurr"];
    $haySol = $_REQUEST["haySol"];
    $hayFed = $_REQUEST["hayFed"];

    $sql = "INSERT INTO farm_database.hay";
    $result = $conn->query($sql);
}

if($type == "cow") {
    $cowTag = $_REQUEST["cowTag"];
    $cowName = $_REQUEST["cowName"];
    $cowBreed = $_REQUEST["cowBreed"];
    $cowColor = $_REQUEST["cowColor"];

    $sql = "INSERT INTO farm_database.cattle (idcattle, name, breed, color)
            VALUES ('$cowTag','$cowName','$cowBreed','$cowColor')";
    $result = $conn->query($sql);
}

if($type == "equip") {
    $equipType = $_REQUEST["equipType"];
    $equipMake = $_REQUEST["equipMake"];
    $equipModel = $_REQUEST["equipModel"];
    $equipYear = $_REQUEST["equipYear"];

    $sql = "INSERT INTO farm_database.equipment";
    $result = $conn->query($sql);
}


?>