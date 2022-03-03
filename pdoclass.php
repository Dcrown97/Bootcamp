<?php
class Pdoconnection {
        private $db_details = 'mysql:dbname=bootcamp101;host=localost';
        private $db_username ='root';
        private $db_password ='';
        private $mypdo;

        public function __construct(){

            $this->mypdo = new PDO($this->db_details, $this->db_username, $this->db_password);
            $this->mypdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function ourquery($query, array $variables){
            $stmt = $this->mypdo->prepare($query);
            $stmt->execute($variables);
            return $stmt;
        }
        
}

$pdo = new Pdoconnection();
//var_dum($pdo)
$title = 'first';
$author = 'nanan';
$query = 'SELECT * FROM blogs WHERE blog_title = ? AND author = ?';
$variables = [$title, $author];

$resp = $pdo->ourquery($query, $variables);
$row = $resp->fetchALL(PDO::FETCH_ASSOC);
// var_dump($row);

$sql = "INSERT INTO blogs (blog_title, slug, author, image, content) VALUES (?,?,?,?,?)";
var_dump($sth);
// $sth->execute([$title, $author]);
// $rowsCount = $rows->fetch()->rows;
die;
