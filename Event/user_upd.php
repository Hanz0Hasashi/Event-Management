<?php

include'conn.php';

if(isset($_POST['submit']))
{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $adre= $_POST['address'];
    $pass= $_POST['pass'];
    $cpass= $_POST['cpass'];



    $que= "UPDATE registration SET fname='$fname', lname='$lname', address='$adre', email='$email', pass='$pass', cpass='$cpass' where email='$email'";
    $r = mysqli_query($conn,$que);

    if(!$r){
        $error[]="Probleem occured";
    }
}
?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user_eve_upd.css">
</head>
<body>
    <div class="cont">
        <form action="" class="reg" id="contactForm" method="post">
            <div class="ch">
                <h2>Update Data Here</h2>
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
        </form>
    </div>
</body>
</html>