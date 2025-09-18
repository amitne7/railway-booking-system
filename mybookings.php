<?php include("config.php"); 
if (!isset($_SESSION['user_id'])) die("Please <a href='login.php'>login</a> first.");

$booking = new Booking();
$result = $booking->getByUser($_SESSION['user_id']);
?>
<html>
<head><title>My Bookings</title></head>
<body>
<h2>My Bookings</h2>
<table border="1">
<tr><th>Train</th><th>From</th><th>To</th><th>Departure</th><th>Arrival</th><th>Seats</th><th>Date</th></tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
  <td><?= $row['train_name'] ?></td>
  <td><?= $row['source'] ?></td>
  <td><?= $row['destination'] ?></td>
  <td><?= $row['departure_time'] ?></td>
  <td><?= $row['arrival_time'] ?></td>
  <td><?= $row['seats_booked'] ?></td>
  <td><?= $row['booking_date'] ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
