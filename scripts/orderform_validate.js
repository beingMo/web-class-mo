/*****************************************
orderform_validate.js

functions to perform validations
*****************************************/

var orderFormObject = document.getElementById("order_form");
var racks = document.getElementsByName("racks");
var benches = document.getElementsByName("benches");
var isChecked;

//main function
function validateOrderForm() {
    //clears previous error message, if present
    document.getElementById("bench_error").innerHTML = "";
    document.getElementById("rack_error").innerHTML = "";
    
    //resets isChecked to true
    isChecked = true;

    findSelectedBench();
    findSelectedRack();
    
    return isChecked;
}

//determines if any bench is selected
function findSelectedBench() {

    for (var i = 0; i < benches.length; i++) {
        if (benches[i].checked) {
            return true;
        }
    }
    isChecked = false;
    document.getElementById("bench_error").innerHTML = " **Must select an item from this category** ";
}

//determines if any rack is selected
function findSelectedRack() {

    for (var i = 0; i < racks.length; i++) {
        if (racks[i].checked) {
            return true;
        }
    }
    isChecked = false;
    document.getElementById("rack_error").innerHTML = " **Must select an item from this category** ";
}
