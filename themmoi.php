<?php
require "connect.php";
if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
    $name = $_POST['name'];
    $intro = $_POST['intro'];
    $description = $_POST['description'];
    $numberdate = $_POST['numberdate'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $sql = "INSERT INTO tour (`name`,`intro`,`description`,`numberdate`,`price`,`category`)
VALUES ('$name','$intro','$description','$numberdate','$price','$category')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: index.php?message=Thêm thành công");
}
$sql = "SELECT * FROM tours";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tours = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * from categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$category_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Intro</label>
            <input type="text" name="intro">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Numberdate</label>
            <input type="text" name="numberdate">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="">Categories</label>
            <select name="category">
                <option value="">---Mời Bạn Chọn---</option> -->
                <?php
                foreach ($category_id as $c) {
                    extract($c);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
        </div>
        <div>
            <input type="submit" name="themmoi" value="Thêm mới">
        </div>
    </form>
</body>

</html>