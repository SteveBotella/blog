<?php if (filter_has_var(INPUT_POST, 'valider')) {
    $postTitle = filter_input(INPUT_POST, 'post_title', FILTER_SANITIZE_STRING);
    $postText = filter_input(INPUT_POST, 'post_text', FILTER_SANITIZE_STRING);
    $publicationStart = filter_input(INPUT_POST, 'publicationStart-time', FILTER_DEFAULT);
    $publicationEnd = filter_input(INPUT_POST, 'publicationEnd-time', FILTER_DEFAULT);
    $authorId = filter_input(INPUT_POST, 'user_nickname', FILTER_SANITIZE_STRING);
    $validate = $_POST['validate'];
    $can_send = false;

    if (!empty($postTitle) && !empty($postText) && !empty($publicationStart) && !empty($publicationEnd) && !empty($authorId)) {
        $can_send = true;
    }

    if (isset($valider)) {
        $resultPostCreate = blogPostCreate($dbh, $postTitle, $postText, $publicationStart, $publicationEnd, $authorId);
    }
}
?>
<form action="?action=blogpostcreate" method="post">
    <div class="title">
        <label class="titleSpace" for="title">Title :</label>
        <input type="text" id="title" name="post_title">
    </div>
    <div class="text">
        <label class="textSpace" for="text">text :</label>
        <input type="text" id="text" name="post_text">
    </div>
    <div class="publicationStart">
    <label for="publicationStart-time">Publication Start :</label>

    <input type="datetime-local" id="publicationStart-time"
           name="publicationStart-time" value="2018-06-12T19:30"
           min="2021-01-01T00:00" max="2022-01-01T00:00">
    </div>
    <div class="publicationEnd">
        <label for="publicationEnd-time">Publication End :</label>

        <input type="datetime-local" id="publicationEnd-time"
               name="publicationEnd-time" value="2018-06-12T19:30"
               min="2021-01-01T00:00" max="2022-01-01T00:00">
    </div>
    <div class="nickname">
        <label class="nicknameSpace" for="name">Nom :</label>
        <input type="text" id="name" name="user_nickname">
    </div>
    <input class="SendButton" type="submit" name="validate" value="Send">
    <input class="ResetButton" type="reset" value="Reset">
</form>