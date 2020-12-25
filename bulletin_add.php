<?php
    session_start(0); //保持登入帳號密碼的編號 
if (!isset($_SESSION['id'])){   // 如果編號不同系統必須要你在重新登入
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=login.html>"; //在等3秒鐘系統會讓你回到登入的介面
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb"); //登入成功會跟資料庫連結
    if (mysqli_connect_error($conn)) //蓮不道資料庫系統會提醒你無法連結
      die("無法連線資料庫");        
    //跟資料庫對照每筆資料要跟哪一行有關系
    $sql="insert into bulletin(title, content, type, time) values ('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
    //echo $sql; //測試有沒有印出
    if (!mysqli_query($conn, $sql)){ //針對某個資料
     echo("Error description: " . mysqli_error($conn));//如果錯誤會出現ERROR   
    }
    else  
       echo "新增佈告成功";   //對的話會出現成功
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php>"; //回到已更新的介面
}
?>
