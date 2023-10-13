<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $connect = new mysqli('localhost', 'root', '', 'k22cntt3_tung');
    //echo 'Connected successfully';
    $sql = "SELECT * FROM SinhVien WHERE 1=1";
    $resultSet = $connect->query($sql);
    //print_r($resultSet);
    //while($row = $resultSet->fetch_array()){
  //echo "<p>" . $row[0] ."---" . $row["Tenkhoa"];
   // }
?>



    <h1>danh sách sinhvien</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>mã sinh viên</th>
                <th>họ và tên</th>
                <th>ngày sinh</th>
                <th>giới tính</th>
                <th>mã khoa</th>
                <th>anh</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $stt =0;
            while($row = $resultSet->fetch_array()){
                $stt++;
            ?> 

            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $row["MaSV"]; ?></td>
                <td><?php echo $row["Hoten"]; ?></td>
                <td><?php echo $row["Ngaysinh"]; ?></td>
                <td><?php echo $row["Gioitinh"]; ?></td>
                <td><?php echo $row["Makhoa"]; ?></td>
                <td><?php echo $row["Anh"]; ?></td>
            </tr>
            
        <?php

            }

          ?>
        </tbody>

    </table>
</body>
</html>