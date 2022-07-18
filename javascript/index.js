
  




let date1=document.querySelector(".date1").innerHTML;
let datearray=date1.split("/");

let newdatearray=datearray[1] + '/' + datearray[0] + '/' + datearray[2];


  
let date2=document.querySelector(".date2").innerHTML;

let date2array=date2.split("/");

let newdate2array=date2array[1] + '/' + date2array[0] + '/' + date2array[2];
console.log(newdatearray, newdate2array);

var diffdate1 = new Date (newdatearray);
var diffdate2 = new Date (newdate2array);
console.log(diffdate1,diffdate2);
  

var Difference_In_Time = diffdate2.getTime() - diffdate1.getTime();
  

var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
  

console.log("Total number of days between dates  <br>"
               + date1 + "<br> and <br>" 
               + date2 + " is: <br> " 
               + Difference_In_Days);
