<?php if (!empty($resultTableArticle)): ?>
<?php $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?>
        <div>
            <h2><?=$resultTableArticle[$id]['postTitle']?></h2>
            <?=$resultTableArticle[$id]['postText']?><br><br>
            <?=$resultTableArticle[$id]['nickname']?><br><br>
        </div>
<?php endif; ?>