const button = document.querySelector('input[type="button"]');
const tijd = new Date();
const tijd1 = tijd.getHours() + ':' + tijd.getMinutes() + ':' + tijd.getSeconds();
document.querySelector('.tijd').innerText = 'Het is nu ' + tijd1;

button.onclick = function berekening() {
    const number = parseFloat(document.querySelector('input[type="number"]').value);
    const antwoord1 = parseFloat(Math.PI * number).toFixed(2);
    const antwoord2 = parseFloat(Math.PI * (number * number)).toFixed(2);

    document.querySelector('.antwoord').innerText = 'De omtrek van de cirkel is ' + antwoord1;
    document.querySelector('.antwoordtwee').innerText = 'De oppervlakte van de cirkel is ' + antwoord2;
};
