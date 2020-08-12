<?php
    define("FIRSTWEEKDAY", 'MONDAY'); 
    

    echo FIRSTWEEKDAY, PHP_EOL;         //Lấy hằng số bằng cách chỉ ra tên

    $firstweek = 'FIRSTWEEKDAY';
    echo constant($firstweek), PHP_EOL; // Lấy hằng số có tên lưu trong biến $firstweek 
?>