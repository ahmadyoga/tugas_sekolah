function lampu(){
    var x = document.getElementById("toggle").checked;
    const gambar = document.querySelector('.lampu');
    let lampu;
    if(x == true){
        gambar.classList.add('on');
        lampu = 'on';
    }else if (x == false){
        gambar.classList.remove('on');
        lampu = 'off';
    }
    return console.log(lampu);
}