console.log("Connected");
function get_text(){
    let s = document.getElementById("Text").value;
    console.log(s);
    let p = s.length;
    console.log(p);
    let st = s.split(" ");
    for(let x of st){
        if(x == ""){
            continue;
        }
        else{
            console.log(x);
        }
    }
}