<?php
date_default_timezone_set('Asia/Tokyo');
$a =  date('Y/m/d h:i:s');
setcookie('zenkailogin',$a);
echo '前回記録した日時は'.$_COOKIE['zenkailogin'];
?>