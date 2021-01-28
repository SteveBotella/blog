<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'config/database.php';
require 'ressources/views/header.tpl';
$map = [
    'home' => 'app/controllers/homeController.php',
    '404' => 'ressources/views/errors/404.php',
];
if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!isset($map [$action])) {
        $action = '404';
    }
} else {
    $action = 'home';
}
$fichier = $map [$action];
require $fichier;
require 'ressources/views/footer.tpl';