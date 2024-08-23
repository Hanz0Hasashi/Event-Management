<?php

include('conn.php')

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
    <div class="con">
    <table class="tb">
        <tr>
            <th>name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Event</th>
            <th>Location</th>
            <th>Payment</th>
            <th>Transaction ID</th>
            <th>Confirm</th>
            <th>Delete</th>
        </tr>
        <?php
    
    $query="select * from events";
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
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['eventname'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['payment'];?></td>
                    <td><?php echo $row['payid'];?></td>
                    <td>
                        <select name="" id="" class="sele">
                            <option value="one">select</option>
                            <option value="two">yes</option>
                            <option value="thre">no</option>
                        </select>
                    </td>
                    <td><button type="submit" name="submit"><a href="dele.php?email=<?php echo $row['email']; ?>">Delete</a></button></td>
                </tr>
            <?php
        }
    }
    ?>
       
    </table>
    </div>
</body>
</html>