<?php
require  'app/persistences/blogPostData.php';
$resultTableArticle = lastBlogPosts($dbh);
require 'ressources/views/home.tpl';
