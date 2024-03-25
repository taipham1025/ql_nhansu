<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Nhân Viên</title>
    <link href="thongtinnhanvien.css" rel="stylesheet" /> 
</head>
<body>
        <div class="container">
        <h1>DANH SÁCH NHÂN VIÊN</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã Nhân Viên</th>
                    <th>Tên Nhân Viên</th>
                    <th>Giới Tính</th>
                    <th>Nơi Sinh</th>
                    <th>Tên Phòng</th>
                    <th>Lương</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'ketnoi.php';
                $lietke_sql = "SELECT n.*, p.Ten_Phong FROM nhanvien n JOIN phongban p ON n.Ma_Phong = p.Ma_Phong";
                $result = mysqli_query($conn, $lietke_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo  $r['Ma_NV']; ?></td>
                        <td><?php echo  $r['Ten_NV']; ?></td>
                        <td>
                            <?php
                            if ($r['Phai'] == 'NAM') {
                                echo '<img src="image/man.png" alt="Nam" width="40">';
                            } elseif ($r['Phai'] == 'NU') {
                                echo '<img src="image/woman.png" alt="Nữ" width="40">';
                            }
                            ?>
                        </td>
                        <td><?php echo  $r['Noi_Sinh']; ?></td>
                        <td><?php echo  $r['Ten_Phong']; ?></td>
                        <td><?php echo  $r['Luong']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>