<!DOCTYPE html>
<html>
<head>
    <title>Post Board</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
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
<h2>Service is Provided For the Following Classes:</h3>
<div class="container">
    <div class="subjectSelected">Math</div>
    <div class="subjectSelected">English</div>
    <div class="subjectSelected">Science</div>
    <div class="subjectSelected">Computer Science</div>
</div>
<div class="postQuestion">
    <h2>Post a Question:</h2>
    <form action="submit_post.php" method="post">
        <input type="text" name="post_title" placeholder="Post Title" required><br>
        <textarea name="post_content" placeholder="Write your post..." required></textarea><br>
        <label fore="subject">Select the Subject:</label>
        <select name="subject" id="subject" required>
            <option value="math">Math</option>
            <option value="english">English</option>
            <option value="science">Science</option>
            <option value="Computer Science">Computer Science</option>
        </select><br>
        <input type="submit" value="Submit Post">
    </form>
</div>
<?php


// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");



// Retrieve posts from the 'posts' table
$query = "SELECT * FROM posts WHERE solved=0";
$result = $db->query($query);

// Display posts
echo "<h2> Viewing Unsolved Posts: </h2>";
echo "<p><a href='solved.php'>Looking for solved posts?</a></p>";
while ($row = $result->fetch_assoc()) {
    echo "<h2><a href='reply.php?postid={$row['postid']}'>{$row['title']}</a></h2>";
    echo "<p>Subject: {$row['subjectName']}</p>";
    echo "<p>by: {$row['userid']} at {$row['timest']}</p>";
    echo "<p>{$row['content']}</p>";
    //echo "<a href='reply.php?postid={$row['postid']}'>Reply</a>";
}
?>
<?php
/*

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

</body>
</html>

