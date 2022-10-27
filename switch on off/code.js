var lampu = 'off';

function saklar () {
    let switc;
    if (lampu == null){
        switc = 'on';
    } else if(lampu == 'on' || switc == 'on'){
        switc = 'off'
    } else if(lampu == 'off' || switc == 'off'){
        switc = 'on'
    } else (
        lampu = 'eror'
    )
    
    lampu = switc;
    const gambar = document.querySelector('.gambar');
    if(lampu == 'on'){
        gambar.classList.add('on');
    }else if (lampu == 'off'){
        gambar.classList.remove('on');
    }
    return console.log(lampu);
}


