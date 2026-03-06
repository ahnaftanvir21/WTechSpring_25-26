console.log("HTML page Are connected");
var a = 130;
let b = 245.348;
let c = a+b;
console.log("Sum of C",c);
function collect_name(){
    let name = document.getElementById("StudentName").value;
    console.log(name);
    if(name == ""){
        document.getElementById("NameError").innerHTML="Name Can Not Be Empty";
        return true;
    }
    if(name.length<5){
        document.getElementById("NameError").innerHTML="Name Can Not Have Less then 5 elements!!";
    }
    return false;

}
function collect_data(){
    let isNamevalid = collect_name();
    return false;
}