<?php 
    class Admin {
        private $conn;

        public $id;
        public $name;
        public $password;

        public function __construct($db){
            $this->conn = $db;
        }

        public function validateAdmin() {
            $query = "SELECT * FROM admins WHERE name = ? AND password = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$this->name, $this->password]);
            $admins = $stmt->fetchAll();

            if (count($admins) == 0) {
                return null;
            }
            else {
                $this->id = $admins[0]->id;
                return $this->id;
            }
        }
    }
?>