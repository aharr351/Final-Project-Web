<!DOCTYPE html>
<html>
<head>
    <title>Post Board - Solved</title>
    <link rel="stylesheet" href="postStyle.css">
</head>
<body>
    <button onclick="document.location='index.php'">home</button>
    <h1>Reply to Post That Where Solved</h1>

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
<h2>Replies:</h2>
<?php
// Retrieve replies associated with each post
$query = "SELECT * FROM replies WHERE postid = $postid";
$result = $db->query($query);

// Display replies
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['content']} <br>{$row['userid']} at {$row['timest']}</p>";
}

?>

</body>
</html>