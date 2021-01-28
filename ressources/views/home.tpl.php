<?php if (!empty($resultTableArticle)): ?>
<?php foreach ($resultTableArticle as $value): ?>
<div><?=$value['postTitle']?> <?=$value['nickname']?></div>
<?php endforeach; ?>
<?php endif; ?>