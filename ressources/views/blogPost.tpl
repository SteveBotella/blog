<?php if (!empty($resultTableArticle)): ?>
        <div>
            <h2><?=$resultTableArticle['postTitle']?></h2>
            <?=$resultTableArticle['postText']?><br><br>
            <?=$resultTableArticle['nickname']?><br><br>
        </div>
<?php if (!empty($resultTableComment)): ?>
        <?php foreach ($resultTableComment as $Comment): ?>
        <div>
            <?=$Comment['commentText']?><br>
            <?=$Comment['nickname']?><br>
        </div>
        <?php endforeach; ?>
<?php endif; ?>
<?php endif; ?>