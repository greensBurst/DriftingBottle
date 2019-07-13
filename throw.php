<?php
    $content = $_GET["a"];
    $encode = mb_detect_encoding($content, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
    $str_encode = mb_convert_encoding($content, 'UTF-8', $encode);
    $whose = $_GET["b"];
    $link = mysqli_connect("localhost", "root", "", "plp");
    $sql1 = "select password from userlist where username = 'bottlenum'";
    $rs = mysqli_query($link,$sql1);
    $row = mysqli_fetch_assoc($rs);
    $number = $row["password"];
    $sql2 = "insert into ocean values ({$number},'{$content}','{$whose}')";
    mysqli_query($link,$sql2);
    $sql3 = "update userlist set password = {$number}+1 where username = 'bottlenum'";
    mysqli_query($link,$sql3);
    echo "您扔出了一个瓶子";
    mysqli_close($link);
?>