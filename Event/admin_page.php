<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="page">
        hello,<br> Admin <b> <?php session_start(); echo $_SESSION['mail']?></b>
    <div class="container">
        <h3>Registered Users</h3>
        <button type="submit" class="btn"><a href="admin.php">Users</a></button>
        <h3>Resquested Events</h3>
        <button type="submit" class="btn"><a href="admin1.php">Events</a></button>
    </div>
    <button type="submit" class="btn"><a href='logout.php'>LogOut</a></button>
    </div>
</body>
</html>