<?php

$myData = file_get_contents('./generated.json');

//$myJSON = json_encode($myData);

echo ('<pre>' . $myData  . '</pre>') ;