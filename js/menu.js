let button = document.querySelector('#btn-topicos')
button.addEventListener('click', function(){
    document.querySelector('.topicos .row').classList.toggle('active')
    let img = document.querySelector('.topicos button img')
    
    if(img.style.transform == 'rotate(180deg)'){
        button.setAttribute('aria-label', 'Clique para fechar a navegação dos tópicos do artigos')
        img.style.transform = 'rotate(0deg)'
    }else{
        button.setAttribute('aria-label', 'Clique para abrir a navegação dos tópicos do artigos')
        img.style.transform = 'rotate(180deg)'
    }
    
})
