/* get data from document & split data to array by "/" */
// let date1 = document.querySelector(".date1").value;
// console.log(date1);
// // let datearray = date1.split("/");

// let date2 = document.querySelector(".date2").value;
// console.log(date2);
// // let datearray2 = date2.split("/");

// // /* adapt MM/DD/YY to DD/MM/YY */
// // let newdatearray = datearray[1] + '/' + datearray[0] + '/' + datearray[2];
// // let newdatearray2 = datearray2[1] + '/' + datearray2[0] + '/' + datearray2[2];

// /* convert string to date */
// let diffdate1 = new Date (date1);
// let diffdate2 = new Date (date2);

// /* calculate the diff */
// let Difference_In_Time = diffdate2.getTime() - diffdate1.getTime();
// let Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
// let A = Math.ceil (Difference_In_Days)


// / console.log(newdatearray, newdatearray2); 
// console.log(A);




// let date1=document.querySelector(".date1").value;
// let date2=document.querySelector(".date2").value;

// let diffdate1 = new Date (date1)
// let diffdate2 = new Date(date2)

// let time_between = diffdate2.getTime() - diffdate1.getTime();
// let day_between = time_between / (1000*3600*24);
// let dayceil_between = Math.ceil(day_between);



document.querySelector(".rentDay").innerHTML = JSON.parse(localStorage.rentDay);

const rentFee = Number(document.querySelector(".rentFee").innerHTML);
const rentDay = JSON.parse(localStorage.rentDay);
const deposit = Number(document.querySelector(".deposit").innerHTML);
const total = rentFee * rentDay + deposit;

document.querySelector(".totalPrice").innerHTML = rentFee * rentDay + deposit;

localStorage.rentFee = rentFee;
localStorage.total = total;

document.querySelector(".pickupDateTime").innerHTML = localStorage.pickuptimeDate;
document.querySelector(".pickupBranch").innerHTML = localStorage.pickupBranch;

document.querySelector(".returnDateTime").innerHTML = localStorage.returntimeDate;
document.querySelector(".returnBranch").innerHTML = localStorage.returnBranch;

let today = new Date();
minDate = new Date(today.getTime() - today.getTimezoneOffset() * 60000).toISOString().substring(0, 19);
document.querySelector(".pickuptime").setAttribute("min", minDate);
document.querySelector(".returntime").setAttribute("min", minDate);

let maxPickup = document.querySelector('.returntime');
maxPickup.addEventListener('change',setMaxPickupDate);

function setMaxPickupDate () {
    let returntime = document.querySelector(".returntime").value;
    document.querySelector(".pickuptime").setAttribute("max", returntime);
}

let minReturn = document.querySelector('.pickuptime');
minReturn.addEventListener('change',setMinReturnDate);

function setMinReturnDate () {
    let pickuptime = document.querySelector(".pickuptime").value;
    document.querySelector(".returntime").setAttribute("min", pickuptime);
}


/* input day & total price for db */
document.querySelector('.getrentDayValue').value = rentDay;
document.querySelector('.getTotalPriceValue').value = document.querySelector(".totalPrice").innerHTML;

