let button = document.querySelector('.checklist button')
button.addEventListener('click', function(){
    document.querySelector('.checklist').classList.toggle('active')
    let img = document.querySelector('.checklist button img')
    
    if(button.getAttribute('aria-label') == 'Clique para fechar o checklist' ){
        button.setAttribute('aria-label', 'Clique para abrir o checklist')
        img.style.transform = 'rotate(270deg)'
    }else{
        button.setAttribute('aria-label', 'Clique para fechar o checklist')
        img.style.transform = 'rotate(90deg)'
    }
})