<?php
require '../include/connect.php';

if(isset($_POST["submit"])){
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username= '$username'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){

            $_SESSION['login'] = true;

            header("Location: ../views/dashboard.php");
            exit;
        }
        else{
            echo "Gagal login";
        }
    }
    $error = true;
}

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/styleLogin.css">
</head>
<body>
    <div class='container'>
        <header>
            <h1>Login User</h1>
            <?php
                if(isset($error)){
                    echo "<p style='color : red;'>Username atau Password Salah</p> ";
                }
            ?>
        </header>

        <main>
            <!-- <div class="form-container"> -->
                <form action="" method="POST">
                    <!-- <div class='username'> -->
                        <!-- <input type="text" name="username" placeholder="Username" class="textfield" required> -->
                        <!-- <input type="text" id="username" placeholder="Username" class="textfield" required>
                    </div> -->

                    <div class='username'>
                        <input type='username' id='username' placeholder='Username'>
                    </div>

                    <div class='password'>
                        <input type="password" id="password" placeholder="Password">
                    </div>
                    
                    <!-- <div class="remember">
                        <input type="checkbox" name="remember" value="true">
                        <label for="remember">Ingat username ini</label>
                        <H5>Apakah anda ingat password anda??</H5> <a href="regist.php">Register</a>
                    </div> -->

                    <div>
                        <input type="submit" name="submit" value="Submit">
                    </div>

                    <div class="remember">
                        <H5>Belum Punya akun?</H5> <a href="regis.php">Register</a>
                    </div>
                </form>
            <!-- </div> -->
        </main>
    </div>
</body>
</html>