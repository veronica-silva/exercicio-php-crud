//Acessando todos os links com a classe excluir
const links = document.querySelectorAll('.exclusao');
for(let i = 0; i < links.length; i++){
    links[i].addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm('Deseja mesmo excluir?');
        if (resposta) {
            location.href = links[i].getAttribute('href');
        }
    });
}

const situacao = document.getElementById('situacaoAluno');
for(let i = 0; i < situacao.length; i++){
        if (situacao = 'Aprovado') {
            document.getElementById("situacaoAluno").classList.add('table-success');
        } else{
            document.getElementById("situacaoAluno").classList.add('table-danger');
        }

}