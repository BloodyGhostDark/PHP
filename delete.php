<?php
    error_reporting(0); //把錯誤訊息拿掉
    $conn=mysqli_connect("localhost","root","","mydb");
    // 從bulletin 資料庫刪除你要的哪一行
    $sql="delete from bulletin where bid={$_GET[bid]}";
    //echo $sql;
    if (!mysqli_query($conn, $sql))//針對錯誤會出現刪除錯誤
        echo "刪除錯誤";
    else{
        echo "刪除成功；回前頁中...";//對的會出現成功
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //回到已更新的介面
    }
?>