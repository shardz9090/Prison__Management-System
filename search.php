<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="admin_index.php">Home</a></li>
  <li><a href="detail.php">Details</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="Today's-Releases.php">Today's Releases</a></li>
  <li><a href="history.php">History Sheeters</a></li>
  <li><a href="logout.php">Log Out</a></li>
  <form action="searching.php" method="post">
<input class="search" type="text" name="id" placeholder="Search By Id No...." required>
<input class="search" type="submit" name="searching" value="O,">
  </form>
</ul>
<h2>Prisoners</h2>
<div class='all-cards'>
<?php 
include("connection.php");
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('Not logged in'); window.location='index.php'</script>";
}

$today = date("Y-m-d");
if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
$result = mysqli_query($conn,"SELECT * FROM prisoners WHERE id_no = $id");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    if($row['exit_date'] <= $today){
    echo " 
<div class='card'>
  <img src='images/".$row['pic']."' alt='Avatar' style='width:200px; height:300px;'>
  <div class='container'>
    <h4><b>".$row['name']."</b></h4>".
    " <p> Id No: ".$row['id_no']."</p>".
    " <p> Cell N0: ".$row['cell_num']."</p>".
    " <p> Crime: ".$row['crime']."</p>".
    " <p> Entry Date: ".$row['in_date']."</p>".
    " <p> Exit Date: ".$row['exit_date']."</p>".
    " <p> Prison Days Over.. <a href='delete.php?id=".$row['id']."&cell_num=".$row['cell_num']."'>Delete This Data</a></p>".
 "</div>
</div>
";
    }
    else{
        echo " 
        <div class='card'>
          <img src='images/".$row['pic']."' alt='Avatar' style='width:200px; height:300px;'>
          <div class='container'>
            <h4><b>".$row['name']."</b></h4>".
            " <p> Id No: ".$row['id_no']."</p>".
            " <p> Cell N0: ".$row['cell_num']."</p>".
            " <p> Crime: ".$row['crime']."</p>".
            " <p> Entry Date: ".$row['in_date']."</p>".
            " <p> Exit Date: ".$row['exit_date']."</p>".
         "</div>
        </div>
        ";
    }
}

}
else{
    echo "No prisoners..";
}
}
else{
  echo "Search Results.....";
}
?>
</div>
</body>
</html> 