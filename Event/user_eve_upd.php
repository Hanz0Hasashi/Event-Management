<?php

include'conn.php';

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $addr=$_POST['address'];
    $evname=$_POST['event'];
    $loc=$_POST['location'];



    $que= "UPDATE events SET name='$name', address='$addr', eventname='$evname', location='$loc' where email='$mail'";

    $res=mysqli_query($conn,$que);

    if(!$res)
    {
        die('Failed to fetch');
    }
    else
    {
        echo"not done";
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
        <form action="user_eve_udp.php" class="reg" id="contactForm" method="post">
            <div class="ch">
                <h2>Update Event Here</h2>
                <hr>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                 };
                ?>
            </div>
            <input type="text" placeholder="Name" class="input" name="name" required>
            <input type="text" placeholder="Address" class="input" name="address" required>
            <input type="text" placeholder="Event Name" class="input" name="event" required>
            <input type="text" placeholder="Location" class="input" name="location" required>
            <button type="submit" placeholder="submit" name="update">Submit</button>
        </form>
    </div>
</body>
</html>