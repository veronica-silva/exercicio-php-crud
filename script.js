//Acessando todos os links com a classe excluir
const links = document.querySelectorAll('.exclusao');
for(let i = 0; i < links.length; i++){
    links[i].addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm('Deseja mesmo excluir o aluno?');
        if (resposta) {
            location.href = links[i].getAttribute('href');
        }
    });
}

function getAverage(){
    let nota1 = document.getElementById('primeira').value;
    let nota2 = document.getElementById('segunda').value;
    nota1 = parseFloat(nota1);
    nota2 = parseFloat(nota2);
    let result = ((nota1 + nota2)/2).toFixed(1);
    document.getElementById('media').value = result;
    mediaNotas = verSituacao(result);
    document.getElementById('situacao').value = situacaoResultado;
}

function verSituacao(result){
    if(result >= 7){
        situacaoResultado = "Aprovado";
     }else{
        situacaoResultado = "Reprovado";
     }
     return situacaoResultado;
}

$(document).ready( function () {
    $('#the-table').DataTable();
} );