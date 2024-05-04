<!DOCTYPE html>
<html>
<head>
    <title>Reply to Post</title>
</head>
<body>
    <p><a href='index.php'>home</a></p>
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
    echo "<p>by: {$row['userid']} at {$row['timest']}</p>";
    echo "<p>{$row['content']}</p>";
    echo "<p><br></p>";
}
?>

<?php
// Retrieve replies associated with each post
$query = "SELECT * FROM replies WHERE postid = $postid";
$result = $db->query($query);

// Display replies
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['content']} <br>{$row['userid']} at {$row['timest']}</p>";
}



?>
    <form action="submit_reply.php" method="post">
        <input type="hidden" name="postid" value="<?php echo $_GET['postid']; ?>">
        <textarea name="reply_content" placeholder="Write your reply..." required></textarea>
        <input type="submit" value="Submit Reply">
    </form>
</body>
</html>
