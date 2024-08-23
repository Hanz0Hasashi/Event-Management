<?php

include 'conn.php';
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="conn"></div>
    <div class="cont">
    <table class="tb">
        <tr>
            <th>FirstName</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
        </tr>
        <?php
    
    $query="select * from registration";
    $res=mysqli_query($conn,$query);


    if(!$res)
    {
        die('Error'.error_log(0));
    }
    else
    {
        while($row=mysqli_fetch_assoc($res))
        {
            ?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>                    
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['pass'];?></td>
                    <td><?php echo $row['address'];?></td>

                </tr>

            <?php
        }
    }
    ?>
       
    </table>
    </div>
</body>
</html>