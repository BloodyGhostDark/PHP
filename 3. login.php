<?php 
    # 如果你輸入帳號,密碼跟系統的帳號,密碼是一樣的 
    if (($_GET['id'] == "john") && ($_GET['pwd']=="john1234"))
        echo "Welcome";# true 會出現welcome
    else
        echo "fail login";# false 會出現 fail login 
?>
