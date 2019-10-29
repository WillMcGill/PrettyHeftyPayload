<?php

$myData = file_get_contents('./generated.json');

$myJSON = json_encode($myData);
$getNames = $myJSON[5]-> name;

echo ('<pre>' . $getNames  . '</pre>') ;