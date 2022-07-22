/* date check */
function abc(){
let t = document.querySelector(".pickuptime").value;
let r = document.querySelector(".returntime").value;


let tt = new Date(t)
let rr = new Date(r)


let ttT = tt.getTime();
let rrR = rr.getTime();


if (ttT>rrR && ttT==rrR){
    alert("fuck u!");
}else{
    alert("fuck u!");
}
}