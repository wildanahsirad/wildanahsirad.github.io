<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Caudex:wght@400;700&family=Poppins:wght@300;400;800&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="views/posttest5.html">
    <title>login</title>
</head>
<body>
    <div class='container'>
        <header>
            <h1>Login</h1>
        </header>

        <main>
            <form action='login.php' method='POST'>
                <div class='email'>
                    <input type='email' id='email' placeholder='Email'>
                </div>

                <div class='password'>
                    <input type='password' name='password' id='password' placeholder='Password'>
                </div>

                <div>
                    <input type='submit' value='Submit'>
                </div>
            </form>
        </main>
    </div>

</body>
</html>


    
