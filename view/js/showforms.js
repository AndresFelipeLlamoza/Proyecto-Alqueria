function email(){
    let formemail = document.getElementById('changemail');
    if (formemail.style.display === "none") {
        formemail.style.display = "block";
        formemail.style.transition = "all .5s"
    }else{
        formemail.style.display = "none";
    }   
}
function password(){
    var formpassword = document.getElementById('changepassword');
    if (formpassword.style.display === "none") {
        formpassword.style.display = "block";
    }else{
        formpassword.style.display = "none";
    }   
}
function username(){
    var formuser = document.getElementById('changeusername')
    if (formuser.style.display === "none") {
        formuser.style.display = "block";
    }else{
        formuser.style.display = "none";
    }   
}
function profile(){
    var formprofile = document.getElementById('uploadphoto')
    if (formprofile.style.display === "none") {
        formprofile.style.display = "block";
    }else{
        formprofile.style.display = "none";
    }   
}