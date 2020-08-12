<?php

    // Khởi tạo session PHP nếu chưa khởi tạo
    if (session_id() === '')
    session_start();

    if( isset( $_SESSION['counter'] ) )
    {
        // Đếm mỗi lần truy cập
        $_SESSION['counter'] += 1;
    }
    else
    {
        // Lần đầu truy cập
        $_SESSION['counter'] = 1;
    }

    $msg = "<p>Bạn là vào truy cập ".  $_SESSION['counter'] . ' lần vào trang</p>';
    echo $msg;
?>
