let todosBlocos = document.querySelectorAll('summary')
let todasImagens = document.querySelectorAll('summary img')


todosBlocos.forEach((cada) => {
    cada.addEventListener('click', function(e){
        let imagem

        if(e.target.children[0]){
            imagem = e.target.children[0]
        }else{
            imagem = e.target
        }

        if(imagem.getAttribute('alt') == "Exibir o texto desse tópico"){
            imagem.style.transform = 'rotate(180deg)'
            imagem.setAttribute('alt', 'Fechar o texto desse tópico')
        }else{
            imagem.style.transform = 'rotate(0deg)'
            imagem.setAttribute('alt', 'Exibir o texto desse tópico')
        }
    })
})


todasImagens.forEach((cada_imagem) => {
    cada_imagem.addEventListener('click', function(e){
        console.log(e.target)
    })
})