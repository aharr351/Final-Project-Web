<!DOCTYPE html>
<html>
<head>
    <title>Post Board - Solved</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<h1>Post Board</h1>
<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    echo "<b>"."logged in as ";
    echo "<h3>".$_SESSION["name"]."</h3>";
    //button onclick="document.location='index.php'">home</button>
    echo "<p><a href='logout.php'>logout</a></p>";
    //echo "<button onclick="document.location='logout.php'">home</button>";
}
else{
    echo "<p><a href='login.php'>login</a></p>";
}


// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");



// Retrieve posts from the 'posts' table
$query = "SELECT * FROM posts WHERE solved=1";
$result = $db->query($query);

// Display posts
echo "<h2> Previously Solved Posts: </h2>";
echo "<p><a href='index.php'>Looking for unsolved posts?</a></p>";
while ($row = $result->fetch_assoc()) {
    echo "<h2><a href='solvedReplys.php?postid={$row['postid']}'>{$row['title']}</a></h2>";
    echo "<p>by: {$row['userid']} at {$row['timest']}</p>";
    echo "<p>{$row['content']}</p>";
    //echo "<a href='reply.php?postid={$row['postid']}'>Reply</a>";
}
?>
<?php
// Retrieve replies associated with each post
/*
$query = "SELECT * FROM replies WHERE post_id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $post_id);


// Display replies
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['content']}</p>";
}
*/
?>

</body>
</html>




