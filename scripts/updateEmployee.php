<?php 
    include_once "../models/Employee.php";
    include_once "../config/Database.php";

    $database = new Database();
    $db = $database->connect();

    $employee = new Employee($db);
    
    if(isset($_POST['firstName'])) {
        $employee->id = $_POST['id'];
        $employee->firstName = $_POST['firstName'];
        $employee->lastName = $_POST['lastName'];
        $employee->birthDate = $_POST['birthDate'];
        $employee->personalNumber = $_POST['personalNumber'];

        $employee->update();

        return "ok";
    }

?>