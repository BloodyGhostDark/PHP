<?php
    session_start(0); //把錯誤訊息拿掉
if (!isset($_SESSION['id'])){   // 如果編號不同系統必須要你在重新登入
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=login.html''>"; //在等3秒鐘系統會讓你回到登入的介面
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (mysqli_connect_error($conn))
      die("無法連線資料庫");
    $sql = "update bulletin set title='{$_POST['title']}', content='{$_POST['content']}', type={$_POST['type']}, time='{$_POST['time']}' where bid={$_POST['bid']}"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){
     echo("Error description: " . mysqli_error($conn));   
    }
    else  
       echo "修改成功";   
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; 
}
?>
