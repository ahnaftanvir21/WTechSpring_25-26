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
        Unit = 0;
    }
    getUnitPrice();
    let Total = Unit*UnitPrice*30;
    document.getElementById("TotalPrice").value = Total;
    //console.log(Total);
    if(Total > 1000){
        alert("You are eligible for a gift coupon");
    }
    return false;
}