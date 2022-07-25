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
