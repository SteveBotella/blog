<?php
require  'app/persistences/blogPostData.php';
$resultTableArticle = blogPostById($dbh);
require 'ressources/views/blogPost.tpl';