function hideside(){
    var side = document.getElementById("sidebar");
    var img = document.getElementById("sideimg");
    var text1 = document.getElementById("sidelinktext1");
    var text2 = document.getElementById("sidelinktext2");
    var text3 = document.getElementById("sidelinktext3");
    var text4 = document.getElementById("sidelinktext4");
    var text5 = document.getElementById("sidelinktext5");
    var text6 = document.getElementById("sidelinktext6");
    var text7 = document.getElementById("sidelinktext7");
    var wrapper = document.getElementById("cuerpocontainer");

    if(img.style.height = "5vh" && side.style.width == "27vh"
     && text1.style.display == "block" && text2.style.display == "block" &&
      text3.style.display == "block" && text4.style.display == "block" &&
       text5.style.display == "block" && text6.style.display == "block" &&
        text7.style.display == "block"){
        side.style.width = "10vh"
        img.style.height = "5vh"
        wrapper.style.marginLeft = "10vh"
        side.style.transition = "all .5s"
        text1.style.display = "none"
        text2.style.display = "none"
        text3.style.display = "none"
        text4.style.display = "none"
        text5.style.display = "none"
        text6.style.display = "none"
        text7.style.display = "none"
    }else{
        side.style.width = "27vh"
        img.style.height = "9vh"
        side.style.transition = "all .5s"
        text1.style.display = "block"
        text2.style.display = "block"
        text3.style.display = "block"
        text4.style.display = "block"
        text5.style.display = "block"
        text6.style.display = "block"
        text7.style.display = "block"
        wrapper.style.marginLeft = "27vh"
        wrapper.style.transition = "all .5s"
    }
}