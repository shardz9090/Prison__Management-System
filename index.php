<?php 
session_start();
if(isset($_SESSION['admin'])){
    header("location:admin_index.php?already-logged-in");
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prison Management System</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url("images/bg.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }
       h1{

        color: white;
  text-shadow: 2px 2px 4px #f3f3f3;
  text-align: center;
       }
       form{
           background-color: rgba(255, 255, 255,0.3);
           margin: auto;
           padding: 20px;
           height:250px;
           width: 200px;
            box-shadow: 2px 2px 4px #f3f3f3 ;     
       }
       input{
           padding: 10px;
           margin: 10px;
           width: 80%;
       }
       button{
        padding: 10px;
           margin: 10px;
           width: 90%;
           font-size: 18px;

       }
       button:hover{
            border: 1px solid violet;
       }
    </style>
</head>
<body>
    <h1>NEPAL JAIL</h1>
<form action="login.php" method="post">
    <input type="text" name="uname" placeholder="Username.." required>
    <input type="password" name="pass" placeholder="Password.." required>
    <button type="submit" name="login">Log in</button>
</form>
</body>
</html>