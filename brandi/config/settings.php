<?php

include('variable.php');
include('db.php');
include('function.php');
$id=1;
$webtitle=retrieveWebSetting($id,1);
$headertitle=retrieveWebSetting($id,2);
$topic=retrieveWebSetting($id,3);
$content=retrieveWebSetting($id,4);

$adminid=2;
$admintitle=retrieveWebSetting($adminid,1);
$adminheader=retrieveWebSetting($adminid,2);
$admintopic=retrieveWebSetting($adminid,3);
$admincontent=retrieveWebSetting($adminid,4);

$searchlocal=retrieveLocal();
$searchinter=retrieveInternational();

$local=retrieveLocal();

$international=retrieveInternational();

$s=retrieveSlide();
$slidecount=0;
while ($x=mysqli_fetch_assoc($s)){
    $slidecount++;
}

$slide=retrieveSlide();

$feature=retrieveFeature();

$branch=retrieveBranch();

$localapp=retrievelocalapp();
$localappcount=0;
while ($x=mysqli_fetch_assoc($localapp)){
    $localappcount++;
}

$localappid="LA00".$localappcount;

$internationalapp=retrieveinternationalapp();
$internationalappcount=0;
while ($x=mysqli_fetch_assoc($internationalapp)){
    $internationalappcount++;
}

$internationalappid="IA00".$internationalappcount;



$forgot=retrieveForgot();

?>
