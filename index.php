<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PrettyHeftyPayload";



$myJSON = file_get_contents('./MOCK_DATA.json');

$myData = json_decode($myJSON);

$connection = mysqli_connect($servername, $username, $password, $dbname);

$dataExists = mysqli_query($connection, "SELECT FIRST_NAME FROM USERS");

if ($dataExists->num_rows === 0) {

    foreach ($myData as $value) {
        //echo ($value->first_name . "\n");
        $sql = "INSERT INTO Users (first_name, last_name, gender, ip_address, email) 
    VALUES ('$value->first_name', '$value->last_name', '$value->gender', '$value->ip_address', '$value->email')";
        mysqli_query($connection, $sql);
    }
}

$dataFromDB = mysqli_query($connection, "SELECT * FROM USERS");
//var_dump($dataFromDB);

while($row = $dataFromDB->fetch_assoc()) {
    print_r($row);


}
print_r($dataFromDB);