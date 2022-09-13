<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách tours</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>intro</th>
                <th>description</th>
                <th>number_date</th>
                <th>price</th>
                <th>category_id</th>
                <th>Chức năng</th>
            </tr>
        </thead>
            <tr>
                <td>1</td>
                <td>Hà Nội</td>
                <td>image</td>
                <td>Tour Hà Nội</td>
                <td>Tour Hà Nội đẹp nhất</td>
                <td>11/09/2022</td>
                <td>5.600.000</td>
                <td>Tuor trong nước</td>
                <td><a href="">Thêm mới</a></td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nga</td>
                <td>image</td>
                <td>Tour Đi Nga</td>
                <td>Tour Nga đẹp nhất</td>
                <td>10/09/2022</td>
                <td>22.600.000</td>
                <td>Tuor nước ngoài</td>
                <td><a href="themmoi.php">Thêm mới</a></td>
                <td><a href="sua.php">Sửa</a></td>
                <td><a href="xoa.php">Xóa</a></td>
            </tr>
    </table>
</body>
</html>