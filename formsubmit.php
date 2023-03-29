<?php 
    include("connection.php");
if(isset($_POST['submit'])){
    
    
    

    $name = $_POST['p_name'];
    $id_no = $_POST['p_num'];
    $cell_num = $_POST['cell_num'];
    $sql = mysqli_query($conn, "SELECT * FROM jail_capacity WHERE cell_num = '$cell_num'");
    $c = mysqli_fetch_assoc($sql);
    $cap = $c['capacity'];
    $crime = $_POST['crime'];
    $in_date = $_POST['in_date'];
    $exit_date = $_POST['exit_date'];
    $address = $_POST['address'];
    
    $image = $_FILES['image']['name'];

    // image file directory
    $target = "images/".basename($image);

    // $sql = "INSERT INTO image (filename) VALUES ('$image')";
    // execute query
    // mysqli_query($conn, $sql);

    
    $result = mysqli_query($conn, "SELECT id_no FROM history WHERE id_no = $id_no");
    if(mysqli_num_rows($result) > 0){
    echo "<script>alert('Reg number already exists!'); window.location='admin_index.php';</script>";
    die;
    }
else{
    mysqli_query($conn, "INSERT INTO prisoners (name, id_no, cell_num, crime, in_date, exit_date, address,pic) VALUES ('$name',$id_no,'$cell_num', '$crime', '$in_date', '$exit_date', '$address','$image')");
    mysqli_query($conn, "UPDATE jail_capacity SET capacity = $cap + 1 WHERE cell_num = '$cell_num'");
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $msg = "Image uploaded successfully";
    header("Location:admin_index.php?Prisoner-data-added");
die;
}
}
else{
    echo "<script>alert('form not submitted'); window.location='admin_index.php';</script>";
    die;  
}

?>