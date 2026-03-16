console.log("Connected");
let UnitPrice = 0;
function getUnitPrice(){
    UnitPrice = document.getElementById("UnitPrice").value;
    console.log(UnitPrice);
    return false;
}
let Unit = 0;
function getUnit(){
    Unit = document.getElementById("QuantityPerDay").value;
    console.log(Unit);
    return false;
}