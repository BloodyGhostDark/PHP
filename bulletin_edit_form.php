<?php 
    error_reporting(0); //把錯誤訊息拿掉
    $conn = mysqli_connect("localhost", "root", "", "mydb"); //跟資料庫連結
    if (mysqli_connect_error($conn)) //如果連結不到會出現"無法連結"
      die("無法連線資料庫");
    $sql="select * from bulletin where bid = {$_GET['bid']}";  //選擇在bulletinde的所有資料找出你需要的資料
    //echo $sql;
    $result=mysqli_query($conn, $sql); //跟資料庫針對
    $row=mysqli_fetch_array($result); //抓出已選擇的資料
    //印出名稱表單
    //連結到bulletin_edit.php
    //美筆資料針對,然後印出要修改的表單
    
echo "
<html>

<head><title>修改佈告</title></head>
<body>
  <h2>修改佈告</h2> 
  <form action='bulletin_edit.php' method='post'> 
    <input type=hidden name=bid value=$row[bid]>
    佈告標題：<input  type='text' name='title' size=200 value='$row[title]'><p>      
    佈告內容：<p>
    <textarea rows='20' cols='100' name='content'>$row[content]</textarea> 
    <p>
    佈告類型：<p> 
    <input name='type' value='1' "; 
    if ($row['type']==1) echo "checked ";
    echo "type='radio'>系上公告 
    <input name='type' value='2' ";
    if ($row['type']==2) echo "checked  ";
    echo "type='radio'>招生訊息 
    <input name='type' value='3' ";
    if ($row['type']==3) echo "checked ";
    echo "type='radio'>企業徵才<p>      
    發佈時間：<input type=date name='time' value=$row[time]><p>      
    <input type=submit>

  </form>
</body>
</html>
"; 
?>
