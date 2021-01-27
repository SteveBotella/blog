<?php
require 'ressources/views/header.tpl';
foreach ($resultTableArticle as $value){
    echo '<p>'. $value['postTitle'], $value['nickname']. '</p>';
}
require 'ressources/views/footer.tpl';