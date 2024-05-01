<!DOCTYPE html>
<html>
<head>
    <title>Reply to Post</title>
</head>
<body>
    <h1>Reply to Post</h1>
    <?php
$postid = $_GET['postid'];
$db = new mysqli("localhost", "root", "", "postz");



// Retrieve posts from the 'posts' table
$query = "SELECT * FROM posts WHERE postid = $postid";

$result = $db->query($query);

// Display posts
while ($row = $result->fetch_assoc()) {
    echo "<h2>{$row['title']}</h2>";
    echo "<p>{$row['content']}</p>";
}
?>

<?php
// Retrieve replies associated with each post
$query = "SELECT * FROM replies WHERE postid = $postid";
$result = $db->query($query);

// Display replies
while ($row = $result->fetch_assoc()) {
    echo "<p>reply: {$row['content']}</p>";
}
?>
    <form action="submit_reply.php" method="post">
        <input type="hidden" name="postid" value="<?php echo $_GET['postid']; ?>">
        <textarea name="reply_content" placeholder="Write your reply..." required></textarea>
        <input type="submit" value="Submit Reply">
    </form>
</body>
</html>
