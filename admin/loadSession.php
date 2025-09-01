<?php
    session_start();

    $conn = new mysqli('203.170.129.7','pichayaa_arm','6Xb0kXoa','pichayaa_e-catalog');
 
    if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
        header('location:login.php');
    }
 
    $sql="select * from tbl_users where id='".$_SESSION['user']."'";
    $query=$conn->query($sql);
    $row=$query->fetch_array();
 
?>
