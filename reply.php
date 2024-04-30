<!DOCTYPE html>
<html>
<head>
    <title>Reply to Post</title>
</head>
<body>
    <h1>Reply to Post</h1>
    <form action="submit_reply.php" method="post">
        <input type="hidden" name="postid" value="<?php echo $_GET['postid']; ?>">
        <textarea name="reply_content" placeholder="Write your reply..." required></textarea>
        <input type="submit" value="Submit Reply">
    </form>
</body>
</html>
