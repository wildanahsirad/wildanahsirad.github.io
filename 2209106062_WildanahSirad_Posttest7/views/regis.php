<?php
require "../include/connect.php";

if(isset($_POST["register"])){
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM user where username='$username' ");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah digunakan');
                    document.location.href = 'regis.php';
                </script>";
        }else{
            $sql = "INSERT INTO regist VALUES ('', '$username', '$password')";
            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn)> 0){
                echo "
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = '../views/loginUser.php';
                </script>" ;
            }else{
                echo "
                <script>
                    alert('Registrasi Gagal');
                    document.location.href = 'regis.php';
                </script>" ;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../styles/styleLogin.css">
</head>
<body>
    <div class='container'>
        <header>
            <h1>Registrasi</h1>
        </header>

        <main>
            <form action="" method="POST">
                <div class=''>
                    <input type="username" id="username" placeholder="Username">
                </div>

                <div>
                    <input type="password" id="password" placeholder="Password">
                </div>

                <div>
                    <input type="password" id="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off">
                </div>

                <div class="remember">
                    <h5>Sudah punya akun? </h5> <a href="loginUser.php">Login</a>
                </div>
                
                <!-- <button type="submit" name="register" class="login-btn">Register</button> -->

                <div>
                        <input type="submit" id="submit" value="Submit">
                </div>
            </form>
        </main>
</body>
</html>