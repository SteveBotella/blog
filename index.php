<?php
$raw_url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (isset($raw_url)) {
    switch ($raw_url) {
        case 'home':
            include 'index.php';
            break;
        default:
            include 'index.php';//TODO 404
    }
} else {
    include 'index.php';
}