// pega o elemento através do seletor de id
let button = document.querySelector('#btn-topicos')

// adiciona uma função que será disparada ao clique do botão
button.addEventListener('click', function(){
    // quando clicado o código irá:
    // selecionar a div com a classe "row" que está dentro da section com classe "topicos"
    // entrará nas classes desse elemento e irá executar o toggle, se houver classe "active", ele irá tirar. Caso não tenha a classse active, ele irá adicionar
    document.querySelector('.topicos .row').classList.toggle('active')

    // irá pegar o elemento img que está dentro do botão
    let img = document.querySelector('.topicos button img')
    
    // verfica qual é o valor do atributo aria-label, se for igual a 'Clique para fechar a navegação dos tópicos do artigos', irá executar o bloco de código
    if(button.getAttribute('aria-label') == 'Clique para fechar a navegação dos tópicos do artigo' ){
        // se for verdadeiro a condição passada no if
        // no elemento button, irá colocar o valor do atributo 'aria-label' igual a 'Clique para abir a navegação dos tópicos do artigos'
        button.setAttribute('aria-label', 'Clique para abrir a navegação dos tópicos do artigo')

        // aplicará no estilo da imagem(a seta), a propriedade transform com o rotate de 0 graus    
        img.style.transform = 'rotate(0deg)'
    }else{
        // se for falsa a condição passada no if

        // no elemento button, irá colocar o valor do atributo 'aria-label' igual a  'Clique para fechar a navegação dos tópicos do artigos'
        button.setAttribute('aria-label', 'Clique para fechar a navegação dos tópicos do artigo')

        // aplicará no estilo da imagem(a seta), a propriedade transform com o rotate de 180 graus 
        // ou seja, a seta mudará o lado que aponta
        img.style.transform = 'rotate(180deg)'
    }
    
})

