<?php
    $link = mysqli_connect("localhost", "root", "", "plp");
    $sql1 = "select password from userlist where username = 'bottlenum'";
    $rs1 = mysqli_query($link,$sql1);
    $row1 = mysqli_fetch_assoc($rs1);
    $max = $row1["password"];
    if($max> 1) {
        $max = $max - 1;
    }
    $bid = rand(1,$max);
    $sql = "select content,whose from ocean where number = {$bid}";
    $rs = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($rs);
    echo $bid.$row["whose"].": ".$row["content"];
    mysqli_close($link);
?>