

document.addEventListener("DOMContentLoaded", () => {
    const button_parapente = document.getElementById('parapente');
    const card_parapente = document.getElementById('card-parapente');
    const button_noronha = document.getElementById('noronha');
    const card_noronha = document.getElementById('card-noronha');
    const button_maranhao = document.getElementById('maranhao');
    const card_maranhao = document.getElementById('card-maranhao');
    const button_bonito = document.getElementById('bonito');
    const card_bonito = document.getElementById('card-bonito');
// Click Event
button_parapente.addEventListener('click', function() {
    if (card_parapente.classList.contains('active')) {
        card_parapente.classList.remove('active')
       return button_parapente.textContent = 'Ler mais';
       
    }
    else{
 card_parapente.classList.add('active');

 button_parapente.textContent = 'Ler menos';
    }   
});
button_noronha.addEventListener('click', function() {
    if (card_noronha.classList.contains('active')) {
        card_noronha.classList.remove('active')
       return button_noronha.textContent = 'Ler mais';
       
    }
    else{
 card_noronha.classList.add('active');

 button_noronha.textContent = 'Ler menos';
    }   
});
button_maranhao.addEventListener('click', function() {
    if (card_maranhao.classList.contains('active')) {
        card_maranhao.classList.remove('active')
       return button_maranhao.textContent = 'Ler mais';
       
    }
    else{
 card_maranhao.classList.add('active');

 button_maranhao.textContent = 'Ler menos';
    }   
});
button_bonito.addEventListener('click', function() {
    if (card_bonito.classList.contains('active')) {
        card_bonito.classList.remove('active')
       return button_bonito.textContent = 'Ler mais';
       
    }
    else{
 card_bonito.classList.add('active');

 button_bonito.textContent = 'Ler menos';
    }   
});
});