// seleciona todos elementos summary através do selector de tag
let todosBlocos = document.querySelectorAll('summary')

// seleciona todas imagens que estão dentro de alguma tag summary através do selector. As imagens em questão é o ícone de seta
let todasImagens = document.querySelectorAll('summary img')

// o forEach irá passar pode todos os itens do array que está contido na variavel todosBlocos executando o bloco de código
todosBlocos.forEach((cada) => {
    // para cada elemento summary o código irá:

    // no evento de click, executar uma função
    cada.addEventListener('click', function(e){

        // criar uma variavel que receberá um valor com base em uma condição
        let imagem

        // verificação para checar se o evento foi disparado clicando no texto do summary ou se foi através do icone
        if(e.target.children[0]){
            // caso tenha clicado no texto do summary a imagem que queremos estará dentro do e.target.children[0]
            // a variavel imagem receberá a tag <img> filha do summary
            imagem = e.target.children[0]
        }else{
            // caso tenha clicado no próprio ícone, o icone é o próprio target do evento
            imagem = e.target
        }

        // condição que verifica se o valor do atributo alt é igual a Exibir o texto desse tópico
        if(imagem.getAttribute('alt') == "Exibir o texto desse tópico"){
            // se for, significa que a seta está apontanda pra cima

            // então queremos mudar o sentido da seta para apontar para baixo
            // para isso adicionamos a propriedade transform no estilo do elemento com o valor de 180graus
            imagem.style.transform = 'rotate(180deg)'

            // também mudaremos o atributo alt para fazer sentido com o novo estado(aberto) do summary
            // para isso adicionamos ao atributor alt do icone, o texto 'Fechar o texto desse tópico'
            imagem.setAttribute('alt', 'Fechar o texto desse tópico')
        }else{
            // caso caia no Else, significa que a seta está apontando pra cima

             // então queremos mudar o sentido da seta para apontar para cima
            // para isso adicionamos a propriedade transform no estilo do elemento com o valor de 0graus           
            imagem.style.transform = 'rotate(0deg)'

            // também mudaremos o atributo alt para fazer sentido com o novo estado(fechado) do summary
            // para isso adicionamos ao atributor alt do icone, o texto 'Exibir o texto desse tópico'
            imagem.setAttribute('alt', 'Exibir o texto desse tópico')
        }
    })
})

