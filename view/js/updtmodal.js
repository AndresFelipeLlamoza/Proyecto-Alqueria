function openmodal(){
    var button = document.getElementById('modalupdate');

    if (button.style.display == 'none'){
        button.style.display = 'block';
    }else{
        button.style.display = 'none';
    }
}

function closemodal(){
    var button = document.getElementById('modalupdate');
    if (button.style.display == 'block'){
        button.style.display = 'none';
    }else{
        button.style.display = 'block';
    }
}
