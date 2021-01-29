<?php
require 'app/persistences/blogPostData.php';
$resultPostCreate = blogPostCreate($dbh);
require 'ressources/views/blogPostCreate.tpl';