window.onload =function(){
    let btnVoltarAoTopo = document.querySelector('.topo');

    btnVoltarAoTopo.addEventListener('click', function(){
        voltarAoTopo();
    });

    function voltarAoTopo() {
        location.href = "#link-conteudo";
    }
}


let btnCopiaCodigo = document.querySelectorAll('.copy-code button')

btnCopiaCodigo.forEach((cada_button, index)=>{
    cada_button.addEventListener('click', function(e){
        let texto = document.querySelectorAll('.copy-code div code')[index].textContent    
        navigator.clipboard.writeText(texto);
    })
})