<!DOCTYPE html>
<html>
<head>
    <title>Post Closed</title>
    <link rel="stylesheet" href="submitted.css">
</head>
<body>
<?php
$postid = $_POST['solved'];
$conn = new mysqli("localhost", "root", "", "postz");


//Let user mark as solved
$sql = "UPDATE posts SET solved='1' WHERE postid=$postid";
echo "<h1>For Post:".$postid."</h1><br>";
//Display the solved number
if ($conn->query($sql)===TRUE) {
    echo "<h1>Your question was closed</h1>"."<br>";
    echo "<h1>Thank you for your submission</h1>"."<br>";
}
?>
<h1>Return to homepage</h1>
<div class="align">
<button onclick="document.location='index.php'">Homepage</button>
</div>
</body>
</html>