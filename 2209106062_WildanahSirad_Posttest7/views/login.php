<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == 'wilda' && $password == '123') {
                header('Location: error.html');
                exit;
            } else {
                header('Location: ../views/dashboard.php');
                exit;
            }

            // if($email == 'wilda@gmail.com' && $password == '123') {
            //     header('Location: ./views/posttest.html');
            //     exit;
            // } else {
            //     header('Location: error.html');
            //     exit;
            // }
        }
?>