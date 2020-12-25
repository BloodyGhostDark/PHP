<?php
    error_reporting(0); //把錯誤訊息拿掉
    session_start(); //保持登入帳號密碼的編號
    if (!isset($_SESSION["counter"])){//第一次登入會出現 "1"
        $_SESSION["counter"]=1;
    }else{
        $_SESSION["counter"]++; //以後又再登入每次再 +1
    }
    echo "登入{$_SESSION["counter"]}人次"; // 印出使用者已經登入的數次
?>