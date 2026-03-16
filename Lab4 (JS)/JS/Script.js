console.log("Connected");
let clickcount = 0;
var a = ["ABC","DEF"];
a.forEach((item,index)=>{
    console.log("Index:",index,"Item: ",item);
})
a.map((item, index)=>{
    console.log("Index:", index, "Item: ", item);
})
function get_name(){
    let sname = document.getElementById("StudentName").value;
    document.getElementById("StudentName").style.color="red";
    console.log(sname);
    return false;
}
function get_age(){
    let sage = document.getElementById("Age").value;
    document.getElementById("Age").style.color="red";
    console.log(page);
    return false;
}