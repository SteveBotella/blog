<?php
//retourne les 10 derniers posts avec leur auteurs.

//requete préparé
function lastBlogPosts(PDO $dbh)
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

function blogPostById(PDO $dbh, int $id)
{
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

function commentsByBlogPost(PDO $dbh, int $id)
{
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

function blogPostCreate(PDO $dbh)
{
    $statementhandle = $dbh->prepare('INSERT INTO posts (postTitle, postText, publicationStart, publicationEnd, authors_id)
VALUES ("Nouveau", "un post a été créé", now(), "2022-01-26 14:10:17", 1)
');
    $statementhandle->execute();
    return $statementhandle->fetch(\PDO::FETCH_ASSOC);
}