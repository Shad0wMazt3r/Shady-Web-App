<?php
if(isset($_COOKIE['loggedin']))
{
    if($_COOKIE['loggedin'] == "true")
    {
        header("Location: congratulations.php?flag=flag{i_csRfed_the_wEbSiTe}");
        die();
    }
}
else
{
    setcookie("loggedin", "false", time() + (86400 * 30), "/");
}
if(isset($_GET['error']))
{
    $string = "script";
    if(strpos($_GET['error'], $string) !== false)
    {   
        header("Location: congratulations.php?flag=flag{dId_I_jUsT_xSs_the_wEbSiTe}");
        die();  
    }
    else
    {
    echo "<script>alert('Incorrect Username/Password')</script>";
    }
}

?>

<?php
include("header.php");
?>
<center>
<body class="index-body">
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
<button class="hint" style="color: white;" onclick="showHint()">Hint</button>
</center>
</body>
<script>
function showHint(){
    alert("Try looking at the cookies");
}
</script>
<br>
<?php
if(isset($_GET['error']) and $_GET['error']!= "")
{
echo "<font color=red size=10px>". $_GET['error']. "</font>";
}
?>
</html>