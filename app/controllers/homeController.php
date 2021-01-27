<?php
require  'app/persistences/blogPostData.php';
$resultTableArticle = lastBlogPosts($dbh);
//var_dump($resultTableArticle);
require 'ressources/views/home.tpl.php';
