<?php

//include

    include 'conn.php';


	if(isset($_POST['submit']))
	{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
	$pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $adr = $_POST['address'];


    $select = " SELECT * FROM registration WHERE email = '$email' and pass = '$pass' ";

    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'user already exist!';
 
    }else{

        if($pass != $cpass){
           $error[] = 'password not matched!';
        }else{
            $stmt = $conn->prepare("insert into registration ( fname, lname, email, pass, cpass, address) values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $fname, $lname, $email, $pass, $cpass, $adr);
            $execval = $stmt->execute();
            echo $execval;
            $error[]= "Registration successfully...";
            $stmt->close();
            $conn->close();
            header('location:log.php');
        }
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
        <form action="reg.php" class="reg" id="contactForm" method="post">
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
            <input type="text" placeholder="First name" class="input" name="fname" required>
            <input type="text" placeholder="Last name" class="input" name="lname" required>
            <input type="text" placeholder="Address" class="input" name="address" required>
            <input type="email" placeholder="email" class="input" name="email" required>
            <input type="password" placeholder="Create Password" class="input" name="pass" required>
            <input type="text" placeholder="Confirm Password" class="input" name="cpass" required>
            <button type="submit" placeholder="submit" name="submit">Submit</button>
            <div class="relog">
                <h4>already have account <a href="log.php">Login</a></h4>
            </div>
        </form>
    </div>
</body>
</html>
