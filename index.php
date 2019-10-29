<?php

$myData = file_get_contents('./MOCK_DATA.json');

$myJSON = json_encode($myData);

echo ('<pre>' . $myData  . '</pre>') ;