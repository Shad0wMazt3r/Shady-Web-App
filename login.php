<?php
if($_POST['loggedin'] == "true")
{
    header("Location: congratulations.php?flag=flag{i_csRfed_the_wEbSiTe}");
    setcookie("loggedin", "true", time() + (86400 * 30), "/");
}
else if($_COOKIE['loggedin']=="true")
{
    header("Location: congratulations.php?flag=flag{i_csRfed_the_wEbSiTe}");
}
else
{
    header("Location: index.php?error=incorrect%20username/password");
}
?>
<?php
include("header.php");
?>