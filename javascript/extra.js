const btnCkeck= document.querySelector('.submitCheck');
btnCkeck.addEventListener('click',dateCheck);


/* date check */
function dateCheck(){
let pickuptime = document.querySelector(".pickuptime").value;
let returntime = document.querySelector(".returntime").value;


let pickuptimeDate = new Date(pickuptime)
let returntimeDate = new Date(returntime)


let numberOfPickuptime = pickuptimeDate.getTime();
let numberOfReturntime = returntimeDate.getTime();


if (pickuptime=="" && returntime==""){
    alert("Pick the fucking date");
    btnCkeck.setAttribute('type','button');
    
}else if(numberOfPickuptime>numberOfReturntime || numberOfPickuptime==numberOfReturntime) {
    alert("fuck u!");
    btnCkeck.setAttribute('type','button');
} else {
    alert("fuck uUU!");
    btnCkeck.setAttribute('type','submit');
}
}
