<?php 
    include_once "models/Employee.php";
    include_once "config/Database.php";

    $database = new Database();
    $db = $database->connect();

    $employee = new Employee($db);
    $employees = $employee->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1 class="text-center">EMPLOYEES</h1>
        <table class="table">
            <thead>
                <th>First name</th>
                <th>Last name</th>
                <th>Birth Date</th>
                <th>Personal number</th>
                <th>Registration Date</th>
                <th>Order Number</th>
                <th>Delete</th>
            </thead>
            <tbody>
            <?php foreach($employees as $employee){ ?>
                <tr>
                    <td><?= $employee['firstName'] ?></td>
                    <td><?= $employee['lastName'] ?></td>
                    <td><?= $employee['birthDate'] ?></td>
                    <td><?= $employee['personalNumber'] ?></td>
                    <td><?= $employee['registrationDate'] ?></td>
                    <td><?= $employee['orderNumber'] ?></td>
                    <th><a href="acripts/deleteEmployee.php">delete</a></th>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <form action="scripts/saveEmployee.php" method="post" id="form" class="form mt-1 border p-3 rounded">
        <h3 class="text-center">Add Employee</h3>
        <hr>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName">

            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName">

            <label for="birthDate">Birth Date</label>
            <input type="date" class="form-control" name="birthDate" id="birthDate">

            <label for="personalNumber">Personal number</label>
            <input type="number" class="form-control" name="personalNumber" id="personalNumber">

            <input type="submit" value="Add Employee" id="submitBtn" class="btn btn-primary">
        </div>
        </form>

    </div>
    
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>