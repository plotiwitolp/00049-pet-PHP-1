<?php
$title = "about";
require_once "./blocks/header.php";
?>

<h1>About us</h1>


<form action="./check_post.php" method="post" style="width: 600px;">
    <input type="text" name="username" placeholder="Enter your name" class="form-control"><br>
    <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
    <input type="password" name="password" placeholder="Enter password" class="form-control"><br>
    <textarea class="form-control" name="message" placeholder="Enter message" style="height: 300px;"></textarea><br>
    <input type="submit" value="Send" class="btn btn-success">
</form>

<?php require_once "./blocks/footer.php" ?>