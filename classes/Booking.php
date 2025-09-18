<?php
require_once "Database.php";

class Booking {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function create($user_id, $train_id, $seats) {
        $sql = "INSERT INTO bookings (user_id, train_id, seats_booked) 
                VALUES ('$user_id','$train_id','$seats')";
        return $this->db->query($sql);
    }

    public function getByUser($user_id) {
        $sql = "SELECT b.id, t.train_name, t.source, t.destination, 
                       t.departure_time, t.arrival_time, 
                       b.seats_booked, b.booking_date 
                FROM bookings b 
                JOIN trains t ON b.train_id = t.id 
                WHERE b.user_id='$user_id'";
        return $this->db->query($sql);
    }
}
?>
