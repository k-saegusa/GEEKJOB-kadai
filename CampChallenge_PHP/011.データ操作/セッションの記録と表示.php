<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
$a =  date('Y/m/d h:i:s');

$_SESSION['zenkailogin'] = $a;
echo '前回記録した日時は'.$_SESSION['zenkailogin'];
?>