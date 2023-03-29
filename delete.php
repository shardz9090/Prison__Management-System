<?php 
include("connection.php");
session_start();
$id = $_GET['id'];
$cell_num = $_GET['cell_num'];
echo $id;
mysqli_query($conn, "DELETE FROM prisoners WHERE id = $id");
$sql = mysqli_query($conn, "SELECT * FROM jail_capacity WHERE cell_num = '$cell_num'");
    $c = mysqli_fetch_assoc($sql);
    $cap = $c['capacity'];
    mysqli_query($conn, "UPDATE jail_capacity SET capacity = $cap - 1 WHERE cell_num = '$cell_num'");
header("Location:admin_index.php?Data-Deleted");
die;
?>