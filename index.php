<?php
if(isset($_COOKIE['loggedin']))
{
    if($_COOKIE['loggedin'] == "true")
    {
        header("Location: shop.php");
        die();
    }
}
else
{
    setcookie("loggedin", "false", time() + (86400 * 30), "/");
}
if(isset($_GET['error']))
{
    echo "<script>alert('Incorrect Username/Password')</script>";
}
?>
<?php
include("header.php");
?>
<center>
<form action="login.php" method="POST">
    <div class="login-screen">
        Username:
        <br>
        <input class="input" type="text">
        <br>
        Password:
        <br>
        <input class="input" type="password">
        <br>
        <br>
        <center>
            <input class="submit" type="submit" value="Submit">
        </center>
        <input type="hidden" name="loggedin" value="false">
    </div>
</form>
<br>
<button class="submit" style="color: white;" onclick="showHint()">Hint</button>
</center>
</body>
<script>
function showHint(){
    alert("Try looking at the cookies");
}
</script>
</html>