<?php include("config.php"); $train = new Train(); ?>
<html>
<head><title>Available Trains</title></head>
<body>
<h2>Search Trains</h2>
<form method="get">
  From: <input type="text" name="source" required>
  To: <input type="text" name="destination" required>
  <input type="submit" value="Search">
</form>

<?php
if (isset($_GET['source'])) {
    $trains = $train->search($_GET['source'], $_GET['destination']);
    echo "<h3>Available Trains</h3>";
    echo "<table border='1'>
            <tr><th>Name</th><th>Departure</th><th>Arrival</th><th>Seats</th><th>Action</th></tr>";
    while ($row = $trains->fetch_assoc()) {
        echo "<tr>
                <td>{$row['train_name']}</td>
                <td>{$row['departure_time']}</td>
                <td>{$row['arrival_time']}</td>
                <td>{$row['seats']}</td>
                <td><a href='booking.php?train_id={$row['id']}'>Book</a></td>
              </tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
