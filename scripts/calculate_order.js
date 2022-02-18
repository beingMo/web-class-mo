/*****************************************
orderform_validate.js

functions to perform validations
*****************************************/

function findSelectedRack() {
    var item;

    for (var i = 0; i < document.orderForm.racks.length; i++) {
        if (document.orderForm.racks[i].checked) {
            item = document.orderForm.racks[i].value;
        }
    }
}

function findSelectedBench() {
    var item;

    for (var i = 0; i < document.orderForm.benches.length; i++) {
        if (document.orderForm.benches[i].checked) {
            item = document.orderForm.benches[i].value;
        }
    }
}
