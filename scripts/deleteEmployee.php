<?php 
    include_once "../models/Employee.php";
    include_once "../config/Database.php";

    $database = new Database();
    $db = $database->connect();

    $employee = new Employee($db);
    
    if(isset($_POST['id'])) {
        $employee->id = $_POST['id'];
        $employee->delete();
        return "ok";
    }

?>