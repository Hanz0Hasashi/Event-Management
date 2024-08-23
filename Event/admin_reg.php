<?php

//include

    include 'conn.php';


	if(isset($_POST['submit']))
	{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        $select = " SELECT * FROM admin WHERE email = '$email' and pass = '$pass' ";

        $result = mysqli_query($conn, $select);
    
        if(mysqli_num_rows($result) > 0){
    
        $error[] = 'user already exist!';
    
        }
        else
        {
            $stmt = $conn->prepare("insert into admin ( id, name, email, pass) values(?, ?, ?, ?)");
            $stmt->bind_param("isss", $id, $name, $email, $pass);
            $execval = $stmt->execute();
            echo $execval;
            $error[]= "Registration successfully...";
            $stmt->close();
            $conn->close();
            header('location:admin_log.php');
        }
     }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "initial-scale=1.0">
    <title>Log/Reg</title>
    <link rel="stylesheet" href="css\reg.css">
</head>
<body>
    <div class="cont">
        <form action="" class="reg" id="contactForm" method="post">
            <div class="ch">
                <h2>Register Here</h2>
                <hr>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                 };
                ?>
            </div>
            <input type="number" placeholder="Name" class="input" name="id" required>
            <input type="text" placeholder="Name" class="input" name="name" required>
            <input type="email" placeholder="email" class="input" name="email" required>
            <input type="password" placeholder="Create Password" class="input" name="pass" required>
            <button type="submit" placeholder="submit" name="submit">Submit</button>
            <div class="relog">
                <h4>already have account <a href="admin_log.php">Login</a></h4>
            </div>
        </form>
    </div>
</body>
</html>
