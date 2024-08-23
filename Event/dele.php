<?php
include'conn.php';

if(isset($_GET['email']))
{
    $mail=$_GET['email'];

    $query= "DELETE FROM events WHERE email='$mail'";
    $res= mysqli_query($conn,$query);

    if(!$res)
    {
        die('query fails to delete');
    }
    else
    {
        header('location:admin1.php');
    }
}

?>