<?php

$servername = "localhost";
$username = "root";
$password = "root";

if ($conn = new mysqli($servername, $username, $password)){
    echo "connected";
};

$myJSON = file_get_contents('./MOCK_DATA.json');

$myData = json_decode($myJSON);

//var_dump($myData);

// for ($i = 0; $i < count($myData); $i++){
//     echo ($myData[$i]->first_name . "<br>");
// }