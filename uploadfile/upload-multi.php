<?php

if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    (isset($_FILES['fileupload']))) {

    $files = $_FILES['fileupload'];

        $names      = $files['name'];
        $types      = $files['type'];
        $tmp_names  = $files['tmp_name'];
        $errors     = $files['error'];
        $sizes      = $files['size'];


        $numitems = count($names);
        $numfiles = 0;
        for ($i = 0; $i < $numitems; $i ++) {
            //Kiểm tra file thứ $i trong mảng file, up thành công không
            if ($errors[$i] == 0)
            {
                $numfiles++;
                echo "Bạn upload file thứ $numfiles:<br>";
                echo "Tên file: $names[$i] <br>";
                echo "Lưu tại: $tmp_names[$i] <br>";
                echo "Cỡ file: $sizes[$i] <br><hr>";

                //Code xử lý di chuyển file đến thư mục cần thiết ở đây (bạn tự thực hiện)
                //Ví dụ move_uploaded_file($tmp_names[$i], /upload/'.$names[$i]);

            }
        }
        echo "Tổng số file upload: " .$numfiles;
}
?>

<form method="post" enctype="multipart/form-data">
    <p>Chọn file để upload:
      (Cỡ lớn nhất mà PHP đang cấu hình cho phép upload là
      <?=ini_get('upload_max_filesize')?>)</p>

    <input name="fileupload[]" type="file" multiple="multiple" />
    <input type="submit" value="Đăng ảnh" name="submit">
</form>