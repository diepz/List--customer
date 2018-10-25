<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            border-collapse: collapse ;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày Sinh</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Linh",
            "ngaysinh" => "1983-08-20",
            "gioitinh" => "Nam",
            "diachi" => "Hà Nội",
            "anh" => "1.jpg"),
        "2" => array("ten" => "Nguyễn Văn Linh",
            "ngaysinh" => "1983-08-20",
            "gioitinh" => "Nam",
            "diachi" => "Bắc Giang",
            "anh" => "1.jpg"),
        "3" => array("ten" => "Nguyễn Thái Linh",
            "ngaysinh" => "1983-08-21",
            "gioitinh" => "Nam",
            "diachi" => "Nam Định",
            "anh" => "1.jpg"),
        "4" => array("ten" => "Trần Đăng Linh",
            "ngaysinh" => "1983-08-22",
            "gioitinh" => "Nam",
            "diachi" => "Hà Tây",
            "anh" => "1.jpg"),
        "5" => array("ten" => "Nguyễn Đình Linh",
            "ngaysinh" => "1983-08-17",
            "gioitinh" => "Nam",
            "diachi" => "Hà Nội",
            "anh" => "1.jpg")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['gioitinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }

    ?>
</table>


</body>
</html>