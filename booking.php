<?php include("config.php"); 
if (!isset($_SESSION['user_id'])) die("Please <a href='login.php'>login</a> first.");

$train = new Train();
$booking = new Booking();

if (isset($_GET['train_id'])) {
    $trainData = $train->getById($_GET['train_id']);
}

if (isset($_POST['book'])) {
    $seats = $_POST['seats'];
    if ($booking->create($_SESSION['user_id'], $_GET['train_id'], $seats)) {
        $train->updateSeats($_GET['train_id'], $seats);
        echo "Booking successful! <a href='mybookings.php'>My Bookings</a>";
    } else {
        echo "Error in booking!";
    }
}
?>
<html>
<head><title>Book Ticket</title></head>
<body>
<h2>Book Ticket for <?= $trainData['train_name'] ?></h2>
<form method="post">
  Number of Seats: <input type="number" name="seats" min="1" max="<?= $trainData['seats'] ?>" required><br>
  <input type="submit" name="book" value="Book Now">
</form>
</body>
</html>
