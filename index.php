<h1>Post Board</h1>
<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    echo "logged in as ";
    echo $_SESSION["name"];
    echo "<p><a href='logout.php'>logout</a></p>";
}
else{
    echo "<p><a href='login.php'>login</a></p>";
}

?>


    <form action="submit_post.php" method="post">
        <input type="text" name="post_title" placeholder="Post Title" required>
        <textarea name="post_content" placeholder="Write your post..." required></textarea>
        <input type="submit" value="Submit Post">
    </form>


<?php


// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");



// Retrieve posts from the 'posts' table
$query = "SELECT * FROM posts WHERE solved=0";
$result = $db->query($query);

// Display posts
while ($row = $result->fetch_assoc()) {
    echo "<h2><a href='reply.php?postid={$row['postid']}'>{$row['title']}</a></h2>";
    echo "<p>by: {$row['userid']} at {$row['timest']}</p>";
    echo "<p>{$row['content']}</p>";
    //echo "<a href='reply.php?postid={$row['postid']}'>Reply</a>";
}
/*
<?php
// Retrieve replies associated with each post
$query = "SELECT * FROM replies WHERE post_id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $post_id);

// Display replies
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['content']}</p>";
}
?>
*/
?>



