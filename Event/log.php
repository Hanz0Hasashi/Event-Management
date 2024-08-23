
<?php
//inlude 



include 'conn.php';



if(isset($_POST['submit']))
{
$nam=$_POST['email'];
$password=$_POST['pass'];
{
    $smt = $conn->prepare("select * from registration where email= ?");
    $smt->bind_param('s',$nam);
    $smt->execute();
    $smt_result =$smt->get_result();
    if($smt_result->num_rows > 0)
    {
        $data = $smt_result->fetch_assoc();
        if($data['pass']=== $password)
        {
            session_start();
            $_SESSION['mail']=$data['fname'];
            $error[]= "Success LOg IN";
            header('location:user_page.php');
        }
        else{
            $error[]='incorrect password';
        }
    }
    else{
        $error[]= "Invalid email";
    }
}
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Log</title>
    <link rel="stylesheet" href="css\log.css">
</head>
<body>
    <div class="contain">
        <div class="head">
            <h2>Log in</h2>
            <hr>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                 };
                ?>
        </div>
        <form class="login" action="" method="post">
            <input type="email" class="input" name="email" placeholder="Your email" required>
            <input type="password" class="input" name="pass" placeholder="Your password" required>
            <button type="submit" class="btn" name="submit">Login</button>
        </form>
    </div>
</body>
</html>