
let today = new Date();
minDate = new Date(today.getTime() - today.getTimezoneOffset() * 60000).toISOString().substring(0, 19);
document.querySelector(".pickuptime").setAttribute("min", minDate);
document.querySelector(".returntime").setAttribute("min", minDate);

let maxPickup = document.querySelector(".returntime");
maxPickup.addEventListener("change",setMaxPickupDate);

let minReturn = document.querySelector(".pickuptime");
minReturn.addEventListener("change",setMinReturnDate);


/* input day & total price for db */
document.querySelector(".getrentDayValue").value = rentDay;
document.querySelector(".getTotalPriceValue").value = document.querySelector(".totalPrice").innerHTML;

function setMaxPickupDate () {
    let returntime = document.querySelector(".returntime").value;
    document.querySelector(".pickuptime").setAttribute("max", returntime);
}

function setMinReturnDate () {
    let pickuptime = document.querySelector(".pickuptime").value;
    document.querySelector(".returntime").setAttribute("min", pickuptime);
}