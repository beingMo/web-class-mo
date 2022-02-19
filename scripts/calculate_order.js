/*****************************************
orderform_validate.js

functions to perform validations
*****************************************/

var racks = document.getElementsByName("racks");
var benches = document.getElementsByName("benches");
var attachments = document.getElementsByName("attachments");

function processOrder(){
    findSelectedBench();
    findSelectedRack();
    findSelectedAttachments();
}

function findSelectedRack(){
    var item;

    for (var i = 0; i < racks.length; i++) {
        if (racks[i].checked) {
            item = racks[i].value;
        }
    }
    console.log(item);
}

function findSelectedBench(){
    var item;

    for (var i = 0; i < benches.length; i++) {
        if (benches[i].checked) {
            item = benches[i].value;
        }
    }
    console.log(item);
}

function findSelectedAttachments(){
    var items = [];

    for (var i = 0; i < attachments.length; i++) {
        if (attachments[i].checked) {
            items.push(attachments[i].value);
        }
    }
    console.dir(items);
}
