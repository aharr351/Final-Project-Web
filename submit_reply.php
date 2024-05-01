<?php
// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");

// Handle reply submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postid = $_POST["postid"];
    $reply_content = $_POST["reply_content"];

    // Insert reply data into the 'replies' table
    $query = "INSERT INTO replies (postid, content) VALUES ('$postid', '$reply_content')";
    $db->query($query);

    // Redirect back to the post page
    header("Location: reply.php?postid=$postid");
    exit;
}
?>
