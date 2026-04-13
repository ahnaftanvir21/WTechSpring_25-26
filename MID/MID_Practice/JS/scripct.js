console.log("Connected");
var cnt = 0;
function get_text(){
    cnt++;
    let s = document.getElementById("Text").value;
    console.log(s);
    let p = s.length;
    console.log(p);
    let st = s.split(" ");
    let i = 0;
    let st1 = [];
    for(let x of st){
        if(x == ""){
            continue;
        }
        else{
            st1[i] = x;
            console.log(st1[i]);
        }
        i++;
    }
    document.getElementById("count").innerHTML= "String Length: "+p;
    document.getElementById("string").innerHTML= "String Element: "+st1;
    var st2 = st.reverse().join(" ");
    console.log(st2);
    document.getElementById("rstring").innerHTML="Reverse String: " + st2;
    document.getElementById("Analyze").innerHTML = "Analyze Text "+ cnt; 
}