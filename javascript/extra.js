

/* date check */
function abc(){
let t = document.querySelector(".pickuptime").value;
let r = document.querySelector(".returntime").value;

/* const btnCkeck= document.querySelector('.submitCheck');
let disableSubmit = btnCkeck.setAttribute('type','button');
let ableSubmit = btnCkeck.setAttribute('type','submit');

console.log(disableSubmit,ableSubmit); */


let tt = new Date(t)
let rr = new Date(r)


let ttT = tt.getTime();
let rrR = rr.getTime();


if (t=="" && r==""){
    alert("Pick the fucking date");

}else if(ttT>rrR || ttT==rrR) {
    alert("fuck u!");
} else {
    alert("fuck uUU!");
}
}
