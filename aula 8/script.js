const spanresult = document.querySelector('#resultado')

function showresult() {
    const nome = document.querySelector("#nome").value;
    const sobrenome = document.querySelector("#sobrenome").value;
    const idade = document.querySelector("#idade").value;
    const profissão = document.querySelector("#profissão").value;
    spanresult.innerHTML = `BEM VINDO ${nome} ${sobrenome}, VOCÊ TEM ${idade} ANOS E TRABALHO COM ${profissão}.`
}