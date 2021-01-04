<?php
if($_POST['loggedin'] == "true")
{
    header("Location: blog.php");
}
else if($_COOKIE['loggedin']=="true")
{
    header("Location: blog.php");
}
else
{
    header("Location: index.php?error");
}
?>