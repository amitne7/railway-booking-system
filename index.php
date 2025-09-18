<?php include("config.php"); ?>
<html>
<head><title>Railway Booking System</title></head>
<body>
<h1>Welcome to Railway Ticket Booking System</h1>

<?php if (isset($_SESSION['user_id'])) { ?>
    <p>Hello, <?= $_SESSION['user_name'] ?> | 
       <a href="trains.php">Search Trains</a> | 
       <a href="mybookings.php">My Bookings</a> | 
       <a href="logout.php">Logout</a></p>
<?php } else { ?>
    <p><a href="register.php">Register</a> | 
       <a href="login.php">Login</a></p>
<?php } ?>
</body>
</html>
