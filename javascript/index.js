/* get data from document & split data to array by "/" */
let date1 = document.querySelector(".date1").innerHTML;
let datearray = date1.split("/");

let date2 = document.querySelector(".date2").innerHTML;
let datearray2 = date2.split("/");

/* adapt MM/DD/YY to DD/MM/YY */
let newdatearray = datearray[1] + '/' + datearray[0] + '/' + datearray[2];
let newdatearray2 = datearray2[1] + '/' + datearray2[0] + '/' + datearray2[2];

/* convert string to date */
let diffdate1 = new Date (newdatearray);
let diffdate2 = new Date (newdatearray2);

/* calculate the diff */
let Difference_In_Time = diffdate2.getTime() - diffdate1.getTime();
let Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);


console.log(newdatearray, newdatearray2); 
console.log(Difference_In_Days);
