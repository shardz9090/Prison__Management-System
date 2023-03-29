<?php 
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>alert('Not logged in'); window.location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prison Management System</title>
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
<h1>Prisoner Management</h1>
   
    <form class="firm" action="formsubmit.php" method="POST" enctype="multipart/form-data">
    <input class="in" type="text" name="p_name" placeholder="Prisoner name..." required>
    <input class="in" type="number" name="p_num" placeholder="Identity number..." required>
    <!-- <select class="in" name="cell_num"> -->
<?php 
include("connection.php");
$result = mysqli_query($conn, "SELECT * FROM jail_capacity WHERE capacity < 4");
if(mysqli_num_rows($result) > 0){  
  echo "<select class='in' name='cell_num'>";

while($row = mysqli_fetch_assoc($result)){
      
  echo "<option value='".$row['cell_num']."'>".$row['cell_num']."</option>";
      
}
echo "</select>";
}
else{
  echo "Prison is at full capacity! No more Prisoners can be added !!";
}
?>
  
    
    <input class="in" type="text" name="crime" placeholder="Crime details..." required>
    <input class="in" title="In date" type="date" name="in_date" required>     
    <input class="in" title="Exit date" type="date" name="exit_date" required> 
    <input class="in" title="address" type="text" name="address" placeholder="Address..." required>   
    <input class="in" type="hidden" name="size" value="1000000">
  	<input class="in" type="file" name="image">
    <input class="submit" type="submit" name="submit" value="ADD Prisoner">
    </form>
</body>
</html>