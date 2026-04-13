console.log("JS connected");
function is_name(element){
    //console.log(element);
    let name = document.getElementById(element).value;
    //console.log(name);
    if(name == ""){
        document.getElementById("Error").innerHTML="Name Can not be empty";
    }
    let f = false;
    for(let i = 0;i < name.length;i++){
        //console.log(name.charAt(i));
        let p = name.charAt(i);
        //console.log(p);
        if(((p >= 'a' && p <= 'z') || (p >= 'A' || p <= 'Z'))){
            //console.log(p);
        }
    }
    if(f){
        console.log("error");
        document.getElementById("Error").innerHTML="Name can not have number or symble";
    }
    return false;
}
function get_first_name(){
    is_name("FirstName");
    return false;
}
function collect_data(){
    get_first_name();
    return false
}