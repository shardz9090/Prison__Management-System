<?php 
    include("connection.php");
        session_start();
        if(isset($_POST['login'])){
            $uname = $_POST['uname'];
            $password = $_POST['pass'];
        }

        $query = "select * from admin where uname = '$uname' limit 1";

        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $pass){
                
                $_SESSION['admin'] = $user_data['uname'];
                header("Location:admin_index.php");
                die;
            }
            else{
		    echo "<script>alert('Invalid password'); window.location='index.php'</script>";
            }
        }
        else{
		    echo "<script>alert('No such user'); window.location='index.php'</script>";
        }
?>