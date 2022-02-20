/*****************************************
orderform_validate.js

functions to perform validations
*****************************************/

var racks = document.getElementsByName("racks");
var benches = document.getElementsByName("benches");
var attachments = document.getElementsByName("attachments");
var prices = [];

function processOrder() {
    findSelectedBench();
    findSelectedRack();
    findSelectedAttachments();
    
    var total = calculateTotal();
    //console.log(total);
}

function findSelectedRack() {
    var item;

    for (var i = 0; i < racks.length; i++) {
        if (racks[i].checked) {
            item = racks[i].value;
        }
    }
    var index = item.search(/\d/);
    var title = item.slice(0, index);
    var price = item.slice(index);
    
    prices.push(price);

    //console.log(item);
    //console.log(title);
    //console.log(price);
}

function findSelectedBench() {
    var item;

    for (var i = 0; i < benches.length; i++) {
        if (benches[i].checked) {
            item = benches[i].value;
        }
    }
    var index = item.search(/\d/);
    var title = item.slice(0, index);
    var price = item.slice(index);
    
    prices.push(price);

    //console.log(item);
    //console.log(title);
    //console.log(price);
}

function findSelectedAttachments() {
    var singleItem;
    var titles = [];
    var prices = [];
    var ids = [];
    var firstWord = /\d/;
    var firstDigit = /\w+$/;
    var priceStart, secondWord;

    for (var i = 0; i < attachments.length; i++) {
        if (attachments[i].checked) {
            singleItem = attachments[i].value;
            priceStart = singleItem.search(firstWord);
            titles.push(singleItem.slice(0, priceStart).trim());
            secondWord = singleItem.search(firstDigit);
            this.prices.push(singleItem.slice(priceStart, secondWord).trim());
            ids.push(singleItem.slice(secondWord));
        }
    }
    //console.dir(titles);
    //console.dir(this.prices);
    //console.dir(ids);
}

function calculateSubtotal(prices){
    var subtotal = 0;
    
    for(var i = 0; i < prices.length; i++){
        subtotal += parseFloat(prices[i]);
    }
    return subtotal;
}

function calculateTotal(){
    
    var subtotal = calculateSubtotal(prices);
    var tax = .07;
    var total = (subtotal * tax) + subtotal;
    
    return total;
}