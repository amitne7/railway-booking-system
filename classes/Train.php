<?php
require_once "Database.php";

class Train {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function search($source, $destination) {
        $sql = "SELECT * FROM trains WHERE source='$source' AND destination='$destination'";
        return $this->db->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM trains WHERE id='$id'";
        return $this->db->query($sql)->fetch_assoc();
    }

    public function updateSeats($id, $seats) {
        $sql = "UPDATE trains SET seats = seats - $seats WHERE id='$id'";
        return $this->db->query($sql);
    }
}
?>
