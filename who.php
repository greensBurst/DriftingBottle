<?php
    $link = mysqli_connect("localhost", "root", "", "plp");
    $sql = "select password from userlist where username = 'current'";
    $rs = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($rs);
    echo $row["password"];
    mysqli_close($link);
?>