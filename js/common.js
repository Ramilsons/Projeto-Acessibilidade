//  dispara função no final do processo de carregamento do documento
window.onload =function(){
    // seleciona o botão através do selector de classe, irá selecionar o elemento que possui a classe "topo"
    let btnVoltarAoTopo = document.querySelector('.topo');

    // adiciona evento de click para esse botão. Executará a função abaixo quando esse botão for clicado
    btnVoltarAoTopo.addEventListener('click', function(){
        // chama a função voltarAoTopo
        voltarAoTopo();
    });

    // declarando a função voltarAoTopo
    function voltarAoTopo() {
        // irá buscar o elemento da página que possui id=link-conteudo, justamente o primeiro elemento da página(link que dá opção de ir para o conteudo principal)
        location.href = "#link-conteudo";
    }
}

// busca todos os botões que estão dentro da seção que possui a classe "copy-code"
let btnCopiaCodigo = document.querySelectorAll('.copy-code button')


// para cada botão que ele buscou, irá executar o bloco de código abaixo
btnCopiaCodigo.forEach((cada_button, index)=>{
    // pede para cada botão ouvir o evento de click, e disparar um função quando houver esse evento
    cada_button.addEventListener('click', function(){
        // busca o texto(código) da seção correspondente ao botão disparado.
        let texto = document.querySelectorAll('.copy-code div code')[index].textContent    

        // grava na área de transferência do sistema o texto contido na variavel 'texto'
        navigator.clipboard.writeText(texto);
    })
})