<?php
include("header.php");
if(isset($_GET['name']))
{
    $foriginal =file_get_contents("stans.txt");
    $filenew = $foriginal . $_GET['name']. "\n";
    file_put_contents("stans.txt", $filenew);
    echo "<body>";
}
else
{
    echo "<body><center><form method='GET' action=''>Want to be A Fan? Enter your name here:<br><input class='input' type='text' name='name'></form></center>";
}
?>
<center>
<div class="hiphopHeader">
</div>
<div class="hiphopHeads">
<?php
$f = file_get_contents("stans.txt");
$f = str_replace("\n", "<br>",$f);
echo $f;
?>
</div>
</center>