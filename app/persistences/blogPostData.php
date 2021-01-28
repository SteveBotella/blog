<?php
//retourne les 10 derniers posts avec leur auteurs.

//requete préparé
function lastBlogPosts($dbh){
$statementhandle = $dbh->prepare('SELECT postTitle, authors.nickname
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