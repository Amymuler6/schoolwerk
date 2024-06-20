const button = document.querySelector('input[type="button"]');

button.onclick = function berekening() {
    const number = document.querySelector('input[type="number"]').value;
    const antwoord = Math.PI * number;
    document.querySelector('.antwoord').innerText = 'De omtrek van de cirkel is ' + antwoord;
};