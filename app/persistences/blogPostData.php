<?php
//retourne les 10 derniers posts avec leur auteurs.

//requete préparé
function lastBlogPosts($dbh)
{
    $statementhandle = $dbh->prepare('SELECT postTitle, postText, authors.nickname
FROM `posts`
INNER JOIN authors
ON authors_id=authors.id
ORDER BY `publicationStart` DESC
LIMIT 10');
    $statementhandle->execute();
    return $statementhandle->fetchAll(\PDO::FETCH_ASSOC);
}

/*
//requete
function lastBlogPosts($dbh){
    $statementhandle = $dbh->query('SELECT postTitle, authors.nickname
FROM `posts`
INNER JOIN authors
ON authors_id=authors.id
ORDER BY `publicationStart` DESC
LIMIT 4');
    $result = $statementhandle->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
*/

function blogPostById($dbh)
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $statementhandle = $dbh->prepare('SELECT postTitle, postText, authors.nickname
FROM posts
INNER JOIN authors
ON authors_id=authors.id
WHERE posts.id = :id
ORDER BY publicationStart DESC');
    $statementhandle->bindParam(':id', $id, PDO::PARAM_INT);
    $statementhandle->execute();
    return $statementhandle->fetch(\PDO::FETCH_ASSOC);
}

function commentsByBlogPost($dbh)
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $statementhandle = $dbh->prepare('SELECT commentText, authors.nickname
FROM comments
INNER JOIN authors
ON authors_id=authors.id
WHERE articles_id = :id
ORDER BY dateAdd DESC');
    $statementhandle->bindParam(':id', $id, PDO::PARAM_INT);
    $statementhandle->execute();
    return $statementhandle->fetchAll(\PDO::FETCH_ASSOC);
}