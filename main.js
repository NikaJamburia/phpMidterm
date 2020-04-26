document.getElementById('submitBtn').addEventListener('click', function(e){ 
    e.preventDefault();

    var firstNameParam = document.getElementById('firstName').value;
    var lastNameParam = document.getElementById('lastName').value;
    var birthDateParam = document.getElementById('birthDate').value;
    var personalNumberParam = document.getElementById('personalNumber').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'scripts/saveEmployee.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    params = 'firstName=' + firstNameParam + 
                '&lastName=' + lastNameParam +
                '&birthDate=' + birthDateParam +
                '&personalNumber=' + personalNumberParam;
    console.log(params)
    
    xhr.onload = function(){
        if(this.status == 200){
            alert("Emoloyee Saved");
            location.reload();
        }
    }

    xhr.send(params);
});

function deleteEmployee(id) {
    console.log(id);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'scripts/deleteEmployee.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    params = 'id=' + id;
    console.log(params)
    
    xhr.onload = function(){
        if(this.status == 200){
            alert("Emoloyee deleted");
            location.reload();
        }
    }

    xhr.send(params);
}

function fillEmployeeUpdateModal(employee) {
    console.log(employee);
    document.getElementById('idUpdate').value = employee.id;
    document.getElementById('firstNameUpdate').value = employee.firstName;
    document.getElementById('lastNameUpdate').value = employee.lastName;
    document.getElementById('birthDateUpdate').value = employee.birthDate;
    document.getElementById('personalNumberUpdate').value = employee.personalNumber;
}

function updateEmployee() {
    var idParam = document.getElementById('idUpdate').value;
    var firstNameParam = document.getElementById('firstNameUpdate').value;
    var lastNameParam = document.getElementById('lastNameUpdate').value;
    var birthDateParam = document.getElementById('birthDateUpdate').value;
    var personalNumberParam = document.getElementById('personalNumberUpdate').value;
    console.log(idParam);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'scripts/updateEmployee.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    params = 'id=' + idParam + 
    '&firstName=' + firstNameParam + 
    '&lastName=' + lastNameParam +
    '&birthDate=' + birthDateParam +
    '&personalNumber=' + personalNumberParam;
    console.log(params)
    
    xhr.onload = function(){
        if(this.status == 200){
            alert("Emoloyee Updated");
            location.reload();
        }
    }

    xhr.send(params);
}
