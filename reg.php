<?php
    $username = $_GET["a"];
    $password = $_GET["b"];

    $link = mysqli_connect("localhost", "root", "", "plp");

    $sql1 = "select password from userlist where username = '{$username}'";
    $sql2 = "insert into userlist values ('{$username}','{$password}')";
    $sql3 = "update userlist set password = '{$username}' where username = 'current'";
    $rs = mysqli_query($link, $sql1);
    if (mysqli_num_rows($rs) > 0) {
        echo "用户名已存在";
    } else {
        mysqli_query($link,$sql2);
        mysqli_query($link,$sql3);
        echo "注册成功";
    }
    mysqli_close($link);
?>