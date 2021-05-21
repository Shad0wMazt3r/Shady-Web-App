<?php
if(!($_GET['flag'])){
    header('HTTP/1.0 404 Not Found');
    echo "<script>window.location.replace('secret_files/');</script>";
    exit();
}
$solved_chall_flag = $_GET['flag'];
$flag_array = ["flag{i_csRfed_the_wEbSiTe}", "flag{dId_I_jUsT_xSs_the_wEbSiTe}"];
if(!(in_array($solved_chall_flag, $flag_array))){
    echo "<script>window.location.replace('https://rr.noordstar.me/secret-filesssssssssssssssssssss-712e2ccc')</script>";
    die();
}
if($solved_chall_flag=="flag{i_csRfed_the_wEbSiTe}"){
    $challenge_name = "CSRF TH3 PLAN3T";
    $challenge_level = "1st";
    $challenge_next = "XSS";
    $challenge_brief = "XSS TH3 W0RLD. You will have to XSS execute an XSS on the log in page";
    $next_challenge_url = "/";
    setcookie("loggedin", "false", time() + (86400 * 30), "/");
}
if($solved_chall_flag=="flag{dId_I_jUsT_xSs_the_wEbSiTe}"){
    $challenge_name = "XSS TH3 W0RLD";
    $challenge_level = "2nd";
    $challenge_next = "Enumeration";
    $challenge_brief = "reconnaissance. You will have to enumerate the website and find the flag. Flag Format:<i> flag{random_text_here}</i>. When you find the flag, it will also be provided with the instructions on how to proceed";
    $next_challenge_url = "recon.php";
}

include("header.php");
?>
<body class="congratulations-body">
Congratulations, You have completed <?php echo $challenge_name?>. This was the <?php echo $challenge_level?> challenge. The next challenge is <?php echo $challenge_brief;?>. To proceed, go click here: <a href="<?php echo $next_challenge_url;?>">Next Challenge</a>
</body>