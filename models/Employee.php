<?php 
    class Employee {
        private $conn;

        public $id;
        public $firstName;
        public $lastName;
        public $birthDate;
        public $personalNumber;
        public $registrationDate;
        public $orderNumber;

        public function __construct($db){
            $this->conn = $db;
        }

        public function getAll() {
            $query = "SELECT * FROM employees";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $employees = $stmt->fetchAll();

            return $employees;
        }

        public static function getbyId($id, $conn) {
            $query = "SELECT * FROM employees WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->execute([$id]);
            $employees = $stmt->fetchAll();

            return $employees;
        }

        public function save() {
            $this->registrationDate = date("Y-m-d");
            $this->orderNumber = rand(10000, 99999);
            $query = "INSERT INTO employees(firstName, lastName, birthDate, personalNumber, registrationDate, orderNumber) VALUES(?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                $this->firstName,
                $this->lastName,
                $this->birthDate,
                $this->personalNumber,
                $this->registrationDate,
                $this->orderNumber,
            ]);
        }

        public function update() {
            $query = "UPDATE employees SET firstName = ?, lastName = ?, birthDate = ?, personalNumber = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                $this->firstName,
                $this->lastName,
                $this->birthDate,
                $this->personalNumber,
                $this->id
            ]);
        }

        public function delete() {
            $query = "DELETE FROM employees WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$this->id]);
        }
    }
?>