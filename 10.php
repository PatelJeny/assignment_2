<?php
$jsonString = '{"name":"John","age":30,"city":"New York"}';

$arrayFromJson = json_decode($jsonString, true);

if ($arrayFromJson !== null) {
    print_r($arrayFromJson);
} else {
    echo "Failed to decode JSON.";
}

?>