// busca  o botão que estão dentro do elemento que possui a classe "copy-code" e guarda na variavel button
let button = document.querySelector('.checklist button')

// pede para o botão ouvir o evento de click, e disparar um função quando houver esse evento
button.addEventListener('click', function(){

    // entrará na classe do elemento que possui a classe checklist(o aside) e irá executar o toggle, se houver classe "active", ele irá tirar. Caso não tenha a classse active, ele irá adicionar
    document.querySelector('.checklist').classList.toggle('active')

    // busca  a imagem que esta dentro do elemento button
    let img = document.querySelector('.checklist button img')
    
    // verificar se o atributo aria-label do butão possui o valor 'Clique para fechar o checklist'
    if(button.getAttribute('aria-label') == 'Clique para fechar o checklist' ){
        // se sim, devemos mudar o lado da seta da imagem para cima e também o valor do atributo aria-label do botão

        // no elemento button, irá colocar o valor do atributo 'aria-label' igual a 'Clique para abrir o checklist'
        button.setAttribute('aria-label', 'Clique para abrir o checklist')
        // aplicará no estilo da imagem(a seta), a propriedade transform com o rotate de 270 graus    
        img.style.transform = 'rotate(270deg)'
    }else{
        // se nao, devemos mudar o lado da seta da imagem para baixo e também o valor do atributo aria-label do botão
        button.setAttribute('aria-label', 'Clique para fechar o checklist')
        // aplicará no estilo da imagem(a seta), a propriedade transform com o rotate de 0 graus   
        img.style.transform = 'rotate(90deg)'
    }
})