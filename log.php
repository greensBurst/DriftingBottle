<?php
    $username = $_GET["a"];
    $password = $_GET["b"];

    $link = mysqli_connect("localhost", "root", "", "plp");

    $sql = "select password from userlist where username = '{$username}'";
    $sql2 = "update userlist set password = '{$username}' where username = 'current'";
    $rs = mysqli_query($link, $sql);
    if (mysqli_num_rows($rs) == 0) {
        echo "用户名错误";
    } else {
        $row = mysqli_fetch_assoc($rs);
        if (strcmp($row["password"], $password) == 0) {
            mysqli_query($link,$sql2);
            echo "登录成功";
        } else {
            echo "密码错误";
        }
    }
    mysqli_close($link);
?>