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
    $sql = "SELECT * FROM khoa WHERE 1=1";
    $resultSet = $connect->query($sql);
    //print_r($resultSet);
    //while($row = $resultSet->fetch_array()){
  //echo "<p>" . $row[0] ."---" . $row["Tenkhoa"];
   // }
?>



    <h1>danh sách khoa</h1>
    <hr/>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>mã khoa</th>
                <th>tên khoa</th>
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
                <td><?php echo $row["Makhoa"]; ?></td>
                <td><?php echo $row["Tenkhoa"]; ?></td>
            </tr>
            
        <?php

            }

          ?>
        </tbody>

    </table>
</body>
</html>