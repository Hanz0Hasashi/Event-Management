<?php

include 'conn.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body> 
    <div class="page">
        hello, User <?php session_start(); echo $_SESSION['mail'] ?>
        
    <div class="container">
        <h3>To add Event</h3>
        <button type="submit" class="btn"><a href="events.php">Event</a></button>
        <h3>To update Event</h3>
        <button type="submit" class="btn"><a href="user_eve_upd.php">Update</a></button>
        <h3>To correct Profile</h3>
        <button type="submit" class="btn"><a href="user_upd.php">Update</a></button>
        <h3>To delete account</h3>
        <button type="submit" class="btn"><a href="user_del.php">Delete</a></button>
    </div>
    <button type="submit" class="btn"><a href='logout.php'>LogOut</a></button>
    </div>
</body>
</html>