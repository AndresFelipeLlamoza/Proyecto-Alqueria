function whooper(){
    var x = document.getElementById("linkscontainer");
    if (x.style.display == "none"){
        x.style.display = "flex";
    }else{
        x.style.display = "none";
    }
}
return whooper();