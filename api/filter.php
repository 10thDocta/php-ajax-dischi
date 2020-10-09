<?php

include "../db/db.php";

$author = $_GET["author"];

$result = [];

if ($author == "all") {
    $result = $songDB;
} else {
    foreach ($songDB as $cd) {
        if ($cd["author"] == $author) {
            $result[] = $cd;
        }
    }
}


header('Content-Type: application/json');
echo json_encode($result);