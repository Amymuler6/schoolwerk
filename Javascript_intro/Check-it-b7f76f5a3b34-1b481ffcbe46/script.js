const antwoorden = [
    'Parijs',
    '8',
    'IJsselmeer',
];

const gegevenantwoorden = [
    document.querySelector('input[id="antwoord1"]'),
    document.querySelector('input[id="antwoord2"]'),
    document.querySelector('input[id="antwoord3"]'),
];

const submit = document.querySelector('input[type="submit"]');
const melding = document.querySelector('.melding');

submit.onclick = function controle() {
    let correctCount = 0;
    let incorrectCount = 0;

    gegevenantwoorden.forEach((input, index) => {
        if (input.value === antwoorden[index]) {
            input.classList.add('correct');
            correctCount++;
        } else {
            input.classList.add('incorrect');
            incorrectCount++;
        }
    });

    if (incorrectCount === 0) {
        melding.innerText = "Je hebt alle antwoorden goed!";
    } else {
        melding.innerText = 'Er zijn ' + incorrectCount + ' incorrecte antwoorden';
    }
};