<?php 
session_start();

if(isset($_POST['searching'])){
$id = $_POST['id'];
$_SESSION['id']=$id;
header("Location:search.php?results");
die;
}
else{
    echo "<script>alert('Not submitted'); window.location='admin_index.php'</script>";
    die;
}
?>