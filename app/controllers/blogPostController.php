<?php
require  'app/persistences/blogPostData.php';
$resultTableArticle = blogPostById($dbh);
$resultTableComment = commentsByBlogPost($dbh);
require 'ressources/views/blogPost.tpl';