<!DOCTYPE html>
<html>
<head>
    <title>Viewing Post</title>
    <link rel="stylesheet" href="postStyle.css">
</head>
<body>
    <button onclick="document.location='index.php'">home</button>
    <h1>Reply to Post</h1>

    
<?php
session_start();

$postid = $_GET['postid'];
$db = new mysqli("localhost", "root", "", "postz");


// Retrieve posts from the 'posts' table
$query = "SELECT * FROM posts WHERE postid = $postid";

$result = $db->query($query);

// Display posts
while ($row = $result->fetch_assoc()) {

    $postUser = $row['userid'];

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
<h2>Enter A Reply Here</h2>
<form action="submit_reply.php" method="post">
    <input type="hidden" name="postid" value="<?php echo $_GET['postid']; ?>">
    <textarea name="reply_content" placeholder="Write your reply..." required></textarea><br>
    <input type="submit" value="Submit Reply"><br>
    </form>

<!--Checkbox for marking when post is complete-->
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    $user = $_SESSION["name"];
}else{
    $user = "Anonymous";
}
?>

<?php if($postUser == $user){
 ?> <div class="hideSolved">
    <h2>If your Problem is Solved Please Mark Here:</h2>
    <form action="submittedSolved.php" method="POST">
        <input type="checkbox" id="solved" name="solved" value="<?php echo $_GET['postid']; ?>">
        <label for="solved">Mark this as solved if you found your solution</label><br>
        <input type="submit">
    </form>
    </div><?php
}else{
}?>



</body>
</html>
