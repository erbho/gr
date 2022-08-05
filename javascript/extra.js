// const btnCkeck= document.querySelector('.submitCheck');
// btnCkeck.addEventListener('click',dateCheck);

// /* date check */
// function dateCheck(){
// let pickuptime = document.querySelector(".pickuptime").value;
// let returntime = document.querySelector(".returntime").value;


// let pickuptimeDate = new Date(pickuptime)
// let returntimeDate = new Date(returntime)


// let numberOfPickuptime = pickuptimeDate.getTime();
// let numberOfReturntime = returntimeDate.getTime();

// let puDate = pickuptimeDate.toLocaleDateString();
// let puTime = pickuptimeDate.toLocaleTimeString();
// let puTimeLength = puTime.length;
// let puHour = puTime.slice(0,(puTimeLength-6));
// let puAMPM = puTime.slice(-2);
// let rtDate = returntimeDate.toLocaleDateString();
// let rtTime = returntimeDate.toLocaleTimeString();
// let rtTimeLength = rtTime.length;
// let rtHour = rtTime.slice(0,(rtTimeLength-6));
// let rtAMPM = rtTime.slice(-2);

//     if (pickuptime=="" || returntime=="") {
//         alert("請選取時間");
//         btnCkeck.setAttribute('type','button');
        
//     } else if (numberOfPickuptime>numberOfReturntime || numberOfPickuptime==numberOfReturntime) {
//         alert("錯誤! 請選擇正確時間");
//         btnCkeck.setAttribute('type','button');
//     } else {
//         btnCkeck.setAttribute('type','submit');
//         localStorage.clear();
//         localStorage.pickuptimeDate = puDate + ", " + puHour + " " + puAMPM;
//         localStorage.returntimeDate = rtDate + ", " + rtHour + " " + rtAMPM;
//         localStorage.rentDay = Math.ceil((numberOfReturntime - numberOfPickuptime)/(1000*3600*24));
//         localStorage.pickupBranch = document.querySelector("#pickupBranch").value;
//         localStorage.returnBranch = document.querySelector("#returnBranch").value;
//     }
// }

