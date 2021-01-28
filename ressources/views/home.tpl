<?php if (!empty($resultTableArticle)): ?>
<?php foreach ($resultTableArticle as $value): ?>
<div>
    <h2><?=$value['postTitle']?></h2>
    <?=$value['postText']?><br><br>
    <?=$value['nickname']?><br><br>
</div>
<?php endforeach; ?>
<?php endif; ?>