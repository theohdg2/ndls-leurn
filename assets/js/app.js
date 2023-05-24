const form = document.querySelector('form');
const response = document.getElementById('response');
const question = document.getElementById('question');
const goodAnswer = document.getElementById('good-answers');
const badAnswer = document.getElementById('bad-answers');
const result = document.getElementById('result');


form.addEventListener('submit', e => {
    fetch('/assets/json/data.json')
        .then(response => response.json())
        .then(data => {
            let words = [];
            let responses = [];

            data = Object.entries(data);
            for (let [word, response] of data) {
                words.push(word);
                responses.push(response);
            }

            let currentResponseIndex = words.indexOf(question.textContent);
            if (response.value.trim().toLowerCase() === responses[currentResponseIndex].toLowerCase()) {
                goodAnswer.textContent++;
                result.textContent = 'Bonne réponse';
            } else {
                badAnswer.textContent++;
                result.textContent = 'Mauvaise réponse';
            }


            let index = Math.floor(Math.random() * words.length);
            question.innerHTML = words[index];
            form.reset();

        })
        .catch(err => console.log(err));
    e.preventDefault();

});

