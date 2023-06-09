<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
include 'createDatabaseUser.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>What do we eat tonight ?</title>
    <link rel="stylesheet" type="text/css" href="connectionPage.css">
    <link rel="shortcut icon" href="../imageWebsite/logov2.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
    <h1>What do we eat tonight?</h1>
</nav>

<body>
    <form action="connection.php" id="first-form" method="post" enctype="multipart/form-data">
        <legend>LOGIN</legend>
        <section>
            <div>
                Username : <input type="text" id="username" name="username" />
            </div>
            <div>
                Password : <input type="password" id="password" name="password" />
            </div>
            <input type="submit" id="submit-button" value="Log in">
        </section>
    </form>
    <form action="createUserPage.php" id="second-form" method="post" enctype="multipart/form-data">
        <input type="submit" id="sign-up-button" value="Sign up">
    </form>
</body>