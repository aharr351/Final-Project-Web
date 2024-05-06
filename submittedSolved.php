<?php
$postid = $_POST['solved'];
$conn = new mysqli("localhost", "root", "", "postz");


//Let user mark as solved
//$querySolved = "SELECT solved FROM posts WHERE postid = $postid";
//$resultSolved = $db->query($querySolved);
$sql = "UPDATE posts SET solved='1' WHERE postid=$postid";
echo "For Post:".$postid."<br>";
//Display the solved number
if ($conn->query($sql)===TRUE) {
    echo "Your question was closed"."<br>";
    echo "Thank you for your submission"."<br>";
}
?>
<p>Return to homepage</p>
<button onclick="document.location='index.php'">Homepage</button>