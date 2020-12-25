<?php
    error_reporting(0);//把錯誤訊息拿掉
    
    $conn = mysqli_connect("localhost","root","", "mydb"); //跟資料庫連結
    if (mysqli_connect_error($conn)) // 蓮不到會出現連結錯誤
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");// 把編號變成中文字
    $result=mysqli_query($conn, "select * from user"); //針對在user 所有的使用者
    
    $login=FALSE;
    while ($row=mysqli_fetch_array($result)) { //每個回圈回印出一筆帳號跟密碼
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
        $login=TRUE;
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){ // 如果在帳號跟密碼有一個輸入錯誤回到登入介面
           echo "請輸入帳號/密碼"; 
           echo "<meta http-equiv='refresh' content='0;url=login.html'>";              
    }
    elseif ($login==TRUE){ //登入對的時候
      session_start(); // 保持登入帳號密碼的編號
      $_SESSION["id"] = $_POST['id']; // 把帳號轉換成編號讓系統保留並印出成功
      echo "歡迎登入";  
      echo "<meta http-equiv='refresh' content='0;url=bulletin.php'>"; // 回到資料的介面
    }
    else{
      echo "帳號密碼錯誤"; //錯誤的話會回到登入介面
      echo "<meta http-equiv='refresh' content='0;url=login.html'>";          
    }
?>