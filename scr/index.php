<?php
include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">    <h1 class="text-center">Thông Tin Bệnh Nhân</h1></div>
    <div class="container">
  <a href="add.php">Thêm</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã bệnh nhân</th>
            <th scope="col">Tên</th>
            <th scope="col">Họ</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Chiều Cao</th>
            <th scope="col">Cân nặng</th>
            <th scope="col">Nhóm máu</th>
            <th scope="col">Ngày lập sổ</th>
            <th scope="col">Ngày cập nhật</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $sql = "SELECT * FROM PATIENT";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?> </td>
                            <td><?php echo $row['patientid']; ?> </td>
                            <td><?php echo $row['firstname']; ?> </td>
                            <td><?php echo $row['lastname']; ?> </td>
                            <td><?php echo $row['dateofbirth']; ?> </td>
                            <td><?php echo $row['gender']; ?> </td>
                            <td><?php echo $row['mobile']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['height']; ?> </td>
                            <td><?php echo $row['weight']; ?> </td>
                            <td><?php echo $row['blood_type']; ?> </td>
                            <td><?php echo $row['created_on']; ?> </td>
                            <td><?php echo $row['modified_on']; ?> </td>
                            <td><a href="#"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?patientid=<?php echo $row['patientid']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
        </tbody>
    </table>

    </div>

</body>
</html>