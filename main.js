// document.getElementById('submitBtn').addEventListener('click', function(e){ 
//     e.preventDefault();

//     var firstNameParam = document.getElementById('firstName').value;
//     var lastNameParam = document.getElementById('lastName').value;
//     var birthDateParam = document.getElementById('birthDate').value;
//     var personalNumberParam = document.getElementById('personalNumber').value;

//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'scripts/saveEmployee.php', true);
//     xhr.setRequestHeader('Content-type', 'application/json');

//     var params = {
//         firstName: firstNameParam,
//         lastName: lastNameParam,
//         birthDate: birthDateParam,
//         personalNumber: personalNumberParam,
//     }
//     console.log(params)
    
//     xhr.onload = function(){
//         if(this.status == 200){
//             alert("Emoloyee Saved");
//             location.reload();
//         }
//     }

//     xhr.send(params);
// })