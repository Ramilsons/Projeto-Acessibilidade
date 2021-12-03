window.onload =function(){
    let btnVoltarAoTopo = document.querySelector('.topo');

    btnVoltarAoTopo.addEventListener('click', function(){
        voltarAoTopo();
    });

    function voltarAoTopo() {
        location.href = "#link-conteudo";
    }
}