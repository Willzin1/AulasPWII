const numero = document.getElementById('num1');
const botao = document.getElementById('btn');
const resul = document.getElementById('resultado');

botao.addEventListener('click', tabuada);

function tabuada() {
    let number = Number(numero.value);
    let opcao;

    if (number == '' ){
        alert('Por favor digite um número!');
    }    

    resul.innerHTML = ''; // Usei dessa forma para limpar cada vez que digitarmos o número da tabuada
    for (let i = 1; i <= 10; i++){
        opcao = document.createElement('option');
        opcao.text = `${number} X ${i} = ${number * i}`;
        resul.appendChild(opcao) // Isso adcionará um elemento filho que será a variavel opcao
    }
}