const sortList = document.querySelectorAll('.dropdown-item');
const carList = document.querySelectorAll('.carCard');
console.log(sortList,carList)

function filterCar(carBrand){
    for(i=0;i<carList.length;i++){
        carList[i].classList.replace('d-flex','d-none');
    }
    for(i=0;i<sortList.length;i++){
        sortList[i].classList.replace('sortBg','none');
    }
    document.getElementById(carBrand).classList.replace('d-none','d-flex');
    sortList[carBrand].classList.replace('none','sortBg')

}

function allCar(){
    for(i=0;i<carList.length;i++){
        carList[i].classList.replace('d-none','d-flex');
    }
}


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

document.querySelector(".rentDay").innerHTML = JSON.parse(localStorage.rentDay);
