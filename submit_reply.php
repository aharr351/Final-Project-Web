<?php
// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");

// Handle reply submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST["post_id"];
    $reply_content = $_POST["reply_content"];

    // Insert reply data into the 'replies' table
    $query = "INSERT INTO replies (post_id, content) VALUES ('$post_id', '$reply_content')";
    $db->query($query);

    // Redirect back to the post page
    header("Location: index.php");
    exit;
}
?>
