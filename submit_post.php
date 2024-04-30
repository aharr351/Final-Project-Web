
<?php
// Connect to your MySQL database
$db = new mysqli("localhost", "root", "", "postz");


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_title = $_POST["post_title"];
    $post_content = $_POST["post_content"];

    // Insert post data into the 'posts' table
    $query = "INSERT INTO posts (title, content) VALUES ('$post_title', '$post_content')";
    $db->query($query);

    // Redirect back to the main page
    header("Location: index.php");
    exit;
}
?>
