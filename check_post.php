<?php
$name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$message = $_POST["message"];

if (trim($name) === "")
    echo "<h1>Your don't enter user name</h1>";
else if (strlen(trim($name)) <= 1)
    echo "<h1>This name doesn't exist</h1>";
else if (trim($email) == "" || trim($password) == "" || trim($message) == "")
    echo "<h1>Enter all fields</h1>";
else {
    $_POST["password"] = sha1($password);
    echo "<h1>It's OK</h1>";
    jc_print("Name", $name);
    jc_print("Email", $email);
    jc_print("Password", $_POST["password"]);
    jc_print("Message", $message);
    header('Location: ./about.php');
    exit;
}

function jc_print($title, $val)
{
    echo "<p>$title: $val</p>";
}
