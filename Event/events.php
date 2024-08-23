<?php

//include

    include 'conn.php';


	if(isset($_POST['submit']))
	{
	$name = $_POST['name'];
    $email = $_POST['email'];
	$address = $_POST['address'];
    $event = $_POST['event'];
    $location = $_POST['location'];
    $payment = $_POST['payment'];
    $payid = $_POST['payid'];


    $select = " SELECT * FROM registration WHERE email = '$email'";
    $res= mysqli_query($conn,$select);
    if(mysqli_num_rows($res) > 0)
    {
        $stmt = $conn->prepare("insert into events ( name, email, address, eventname, location, payment, payid) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $name, $email, $address, $event, $location, $payment, $payid);
        $execval = $stmt->execute();
        echo $execval;
        $error[]= "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
    else
    {
        $error[]=('Email not found : please  Register');
    }
     }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>Event Management</title>
</head>
<body>
    <header>
        <h1>Event Management</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section class="event">
            <img src="https://th.bing.com/th/id/OIP.4UZKVxpIC4pFbXD3ICgZHwHaEK?w=281&h=180&c=7&r=0&o=5&pid=1.7"alt="Upcoming">
            <h2>Upcoming Event: Execution</h2>
            <p>Time : 6:30 onwards</p>
            <p>Location: EveryWhere</p>
            <p>Join and Finish the ex-comunicatdo of prize 14M.</p>
        </section>
        <section class="event-card">
            <img src="images\event1.jpg" alt="Event 1">
            <h3>Nature View</h3>
            <p>Date: September 10th, 2023</p>
            <p>Location: Kukrallikere</p>
            <button type="button">Learn More</button>
        </section>
        <section class="event-card2">
            <img src="images\art.jpg" alt="Event 2">
            <h3>Art Exhibition</h3>
            <p>Date: October 5th, 2023</p>
            <p>Location: Art Gallery, Hbbal</p>
            <button type="button">Learn More</button>
        </section>
        <section class="event-card3">
            <img src="images\uta.jpg" alt="Event 3">
            <h3>Culinary Workshop</h3>
            <p>Date: November 20th, 2023</p>
            <p>Location: Cooking Studio,  ATME 
                Canteen</p>
            <button type="button">Learn More</button>
        </section>
        <section class="event-card4">
            <img src="images\diwali.jpg">
            <h3>diwali</h3>
            <p>Date:November 12</p>
            <p>Location: Mane</p>
            <button type="button">Learn More</button>
        </section>
    </main>
</body>
<body>
    <div class="cont">
        <form action="" class="reg" id="contactForm" method="post">
            <div class="ch">
                <h2>Add Event Here</h2>
                <hr>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                 };
                ?>
            </div>
            <input type="text" placeholder="first Name" class="input" name="name" required>
            <input type="email" placeholder="email" class="input" name="email" required>
            <input type="text" placeholder="Address" class="input" name="address" required>
            <input type="text" placeholder="Event Name" class="input" name="event" required>
            <input type="text" placeholder="Location" class="input" name="location" required>
            <input type="text" placeholder="Payment Mode (Cash or Online)" class="input" name="payment" required>
            <h2>UPI ID : TMI@ybl</h2>
            if online payment 
            <input type="text" placeholder="Transaction ID" class="input" name="payid">
            <button type="submit" placeholder="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
<footer>
    <p> 2023 Event Management System</p>
</footer>
</html>