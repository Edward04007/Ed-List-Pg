    const MSGhora = document.querySelector('.hora') 
    const data = new Date()
    const hora = data.getHours()
    if(hora >= 0 && hora < 12){
        /* Bom Dia */
        MSGhora.innerHTML = 'Bom dia!'
    }else if(hora >= 12 && hora <= 18){
        /* Boa Tarde */
        MSGhora.innerHTML = "Boa tarde!"
    }else{
        /* Boa Noite */
        MSGhora.innerHTML = 'Boa noite!'
    }