<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == 'wilda@gmail.com' && $password == '123') {
                header('Location: error.html');
                exit;
            } else {
                header('Location: views/posttest5.html');
                exit;
            }
        }
?>