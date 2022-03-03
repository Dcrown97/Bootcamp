<?php

class Dbconnection
{
    private $db_host = 'localhost'; // Server Name
    private $db_user = 'root'; // Username
    private $db_pass = ''; // Password
    private $db_name = 'databaseass'; // Database Name
    private $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', $this->db_user, $this->db_pass, $this->db_name);
        if (!$this->conn) {
            die('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
    }

    public function ourquery($sql)
    {
        return $this->conn->query($sql);
    }

    public function save_to_table($table, $data)
    {
    }

    public function getAll($query)
    {
        $all_data = [];
        $stmt = $this->conn->query($query);
        $count = mysqli_num_rows($stmt);
        if ($count > 0) {
            while ($row = $stmt->fetch_assoc()) {
                $all_data[] = $row;
            }
        }
        return $all_data;
    }
}
