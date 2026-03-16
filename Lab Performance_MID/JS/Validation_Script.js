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
    if(Unit < 0){
        document.getElementById("Error").innerHTML="Unit Can not be Negative";
        document.getElementById("Error").style.color="red";
        document.getElementById("QuantityPerDay").value = "0";
    }
    return false;
}