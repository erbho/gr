const sortList = document.querySelectorAll('.dropdown-item');
const carList = document.querySelectorAll('.carCard');
console.log(sortList,carList)

function filterCar(carBrand){
    for(i=0;i<carList.length;i++){
        carList[i].classList.replace('d-flex','d-none');
    }
    document.getElementById(carBrand).classList.replace('d-none','d-flex');
}


