<?php

    // Định nghĩa hằng số bằng từ khóa const
    const MONDAY = "THỨ HAI";
    echo MONDAY, PHP_EOL;

    // hằng số là một mảng các ký tự
    const DAYOFWEEK = [
      'CHỦ NHẬT', 'THỨ HAI', 'THỨ BA', 'THỨ TƯ', 'THỨ NĂM', 'THỨ SAU', 'THỨ BẢY', 
    ];
    // Truy cập đọc hằng số
    echo DAYOFWEEK[6]; // THỨ BẢY

    print_r(get_defined_constants(true));


?>