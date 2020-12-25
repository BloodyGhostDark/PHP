<?php

session_start();// 保持登入帳號密碼的編號
//將session清空
unset($_SESSION["id"]);
echo '登出中......';//登出系統
//每2秒鐘會回到登入介面
echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';

?>
