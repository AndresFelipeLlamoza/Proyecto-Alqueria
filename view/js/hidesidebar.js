function hideside(){
    var side = document.getElementById("sidebar");
    var img = document.getElementById("sideimg");
    var centlink = document.querySelectorAll(".linkcenter");
    var links = document.querySelectorAll("#sidelinktext");
    var wrapper = document.getElementById("cuerpocontainer");
    var linkcontainer = document.querySelectorAll(".sideitems");
    var overlay = document.getElementById("overlay");    
    if(img.style.height == "5vh" && side.style.width == "10vh"
     && links[0].style.display == "none" && centlink[0].style.justifyContent == "center" && linkcontainer[0].style.gap == "30px"){
        side.style.width = "27vh"
        side.style.zIndex = "1000"
        img.style.height = "9vh"
        side.style.transition = "all .5s"
        for (var i = 0; i < links.length; i++) {
            links[i].style.display = "block";
        }
        for (var i = 0; i < centlink.length; i++) {
            centlink[i].style.justifyContent = "start";
        }
        for (var i = 0; i < linkcontainer.length; i++) {
            linkcontainer[i].style.gap = "20px";
        }
        overlay.style.display = "block"
        overlay.style.transition = "all .5s"
    }else{
        side.style.width = "10vh"
        img.style.height = "5vh"
        side.style.transition = "all .5s"
        for (var i = 0; i < links.length; i++) {
            links[i].style.display = "none";
        }
        for (var i = 0; i < centlink.length; i++) {
            centlink[i].style.justifyContent = "center";
        }
        for (var i = 0; i < linkcontainer.length; i++) {
            linkcontainer[i].style.gap = "30px";
        }
        wrapper.style.transition = "all .5s"
        overlay.style.display = "none"
        overlay.style.transition = "all .5s"
    }
}