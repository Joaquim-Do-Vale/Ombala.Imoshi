function carregar(){
    var msg = window.document.getElementById('msg')
    var foto = window.document.getElementById('imagem')
    var data = new Date()
    //var hora = 2
    var hora = data.getHours()
    msg.innerHTML = 'Agora são '+hora+' horas'
    if (hora >= 0 && hora < 12) {
        // BOM DIA!
        img.src = 'img/img_1.png'
        document.body.style.background = '#fdf6b0'
    } else if (hora >= 12 && hora < 18) {
        // BOA TARDE!
        img.src = 'img/img_2.png'
        document.body.style.background = '#cc9145'
    } else {
        // BOA NOITE!
        img.src = 'img/img_3.png'
        document.body.style.background = '#42629b'
    }
}
