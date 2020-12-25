<?php
    error_reporting(0); //把錯誤訊息拿掉
    session_start();//保持登入帳號密碼的編號 
    if (!isset($_SESSION["id"])){ // 如果編號不同系統必須要你在重新登入
        echo "請登入系統";
        echo "<meta http-equiv='refresh' content='3; url='login.html'>";//在等3秒鐘系統會讓你回到登入的介面
    }else{
        //登入成功帳號使用者
        //連接登出會登入介面
        //連結到新增表單
        echo "歡迎 {$_SESSION['id']} 登入 [<a href=logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>";
        $conn=mysqli_connect("localhost","root","", "mydb");//跟資料庫連結
        $result=mysqli_query($conn, "select * from bulletin"); //針對在資料庫的資料
        //印出一個表單
        echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){ //每個回圈印出一筆資料
            echo "<tr><td>";
            // 連結到修改表單和刪除表單
            echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a> <a href=delete.php?bid={$row[bid]}>刪除</a>";
            echo "</td><td>";
            echo $row[bid]; 
            echo "</td><td>";
            echo $row[type];
            echo "</td><td>"; 
            echo $row[title];
            echo "</td><td>";
            echo $row[content]; 
            echo "</td><td>";
            echo $row[time];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>