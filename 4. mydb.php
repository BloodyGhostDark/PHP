<?php
    error_reporting(0); #把警告關掉.
    
    #php要怎麼跟mysql資料庫進行連結,有三個步駎
    #1. mysqli_connect, 必須要設定ip(本地端為localhost)
    #   帳號,密碼,以及連接的資料庫(mydb)
    $conn = mysqli_connect("localhost","root","", "mydb");  
    if (mysqli_connect_error($conn))  #如果php 跟 mysql資料庫不可以連結,網頁會出現 "資料庫電腦錯誤".
        die("資料庫連線錯誤");

    #    
    mysqli_set_charset($conn, "utf8"); #把編號變成中文字
    $result=mysqli_query($conn, "select * from user"); #從資料庫找出資料
    while ($row=mysqli_fetch_array($result)) { #每次迴圈抓出1次帳號跟密碼
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>