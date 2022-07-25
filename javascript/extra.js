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


if (pickuptime=="" || returntime==""){
    alert("請選取時間");
    btnCkeck.setAttribute('type','button');
    
}else if(numberOfPickuptime>numberOfReturntime || numberOfPickuptime==numberOfReturntime) {
    alert("錯誤! 請選擇正確時間");
    btnCkeck.setAttribute('type','button');
} else {
    btnCkeck.setAttribute('type','submit');
}
}
