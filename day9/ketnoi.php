<?php
    $conncect = new mysqli('localhost', 'root', '', 'k22cntt3_tung');
    //echo 'Connected successfully';
    $sql = "SELECT * FROM khoa WHERE 1=1";
    $resultSet = $connect->query($sql);
    print_r($resultSet);
?>