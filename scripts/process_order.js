/*****************************************
orderform_validate.js

functions to perform validations
*****************************************/

var racks = document.getElementsByName("racks");
var benches = document.getElementsByName("benches");
var attachments = document.getElementsByName("attachments");
var titles = [];
var prices = [];

function processOrder() {
    if (validateOrderForm()) {
        addSelectedRack();
        addSelectedBench();
        addSelectedAttachments();

        //var total = calculateTotal();
        //console.log(total);
        //console.dir(titles);
        //console.dir(prices);

        showSummary();
        //document.location.href = 'order_confirmation.html';  
    }
}

function addSelectedRack() {
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
    titles.push(title);

    //console.log(item);
    //console.log(title);
    //console.log(price);
}

function addSelectedBench() {
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
    titles.push(title);

    //console.log(item);
    //console.log(title);
    //console.log(price);
}

function addSelectedAttachments() {
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
            this.titles.push(singleItem.slice(0, priceStart).trim());
            titles.push(singleItem.slice(0, priceStart).trim());
            secondWord = singleItem.search(firstDigit);
            this.prices.push(singleItem.slice(priceStart, secondWord).trim());
            prices.push(singleItem.slice(priceStart, secondWord).trim());
            ids.push(singleItem.slice(secondWord));
        }
    }
    //console.dir(this.titles);
    //console.dir(this.prices);
    //console.dir(ids);
}

function calculateSubtotal(prices) {
    var subtotal = 0;

    for (var i = 0; i < prices.length; i++) {
        subtotal += parseFloat(prices[i]);
    }
    return subtotal;
}

function calculateTotal() {

    var subtotal = calculateSubtotal(prices);
    var tax = .07;
    var total = (subtotal * tax) + subtotal;

    return total;
}

function showSummary() {

    var priceColumn = "";
    var titleColumn = "";

    for (var i = 0; i < titles.length; i++) {
        titleColumn = titleColumn.concat(titles[i] + '<br>');
        //titleColumn = titleColumn.concat('<tr>' + titles[i] + '</tr>');
    }
    //console.log(titleColumn);
    for (var i = 0; i < prices.length; i++) {
        priceColumn = priceColumn.concat(prices[i], '<br>');
        //priceColumn = priceColumn.concat('<tr>' + prices[i] + '</tr>');
    }
    //console.log(priceColumn);
    var total = calculateTotal();

    sessionStorage.setItem("total", total);
    sessionStorage.setItem("priceColumn", priceColumn);
    sessionStorage.setItem("titleColumn", titleColumn);

    location.href = "pages/order_confirmation.php";
    //document.getElementById("priceColumn").innerHTML = priceColumn;
    //document.getElementById("titleColumn").innerHTML = titleColumn;
}
