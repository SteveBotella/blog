<?php
require  'app/persistences/blogPostData.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$resultTableArticle = blogPostById($dbh, $id);
if ($resultTableArticle == false) {
    echo 'Aucun article';
}
$resultTableComment = commentsByBlogPost($dbh, $id);
require 'ressources/views/blogPost.tpl';