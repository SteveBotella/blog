<?php
require  'app/persistences/blogPostData.php';
$resultTableArticle = blogPostById($dbh);
if ($resultTableArticle == false) {
    echo 'Aucun article';
}
$resultTableComment = commentsByBlogPost($dbh);
require 'ressources/views/blogPost.tpl';