
//selecting all required elements
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const transparente = document.querySelector(".transparente");
const activeInfo = document.querySelector(".activeInfo");

// o botão para começar o quiz

start_btn.onclick = () => {
        info_box.classList.add("activeInfo"); //mostra info box
        document.body.style.overflow = 'hidden';
        transparente.style.display = 'block';
        
}
transparente.onclick = () => {
    document.body.style.overflow = 'visible';
    transparente.style.display = 'none';
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.remove("activeResult"); 
    window.location.reload();

}

// botão para sair do quiz
exit_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); //esconde info box
    document.body.style.overflow = 'visible';
    transparente.style.display = 'none';
}

// continuar no quiz
continue_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); //esconde a info box
    quiz_box.classList.add("activeQuiz"); //mostra o quiz box
    showQuetions(0); //chamando mostrar Questions function
    queCounter(1); //passing 1 parameter to queCounter
}

let timeValue = 15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// se quer reiniciar quiz
restart_quiz.onclick = () => {
    quiz_box.classList.add("activeQuiz"); //show quiz box
    result_box.classList.remove("activeResult"); //hide result box
    timeValue = 15;
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count);
    queCounter(que_numb);
    clearInterval(counter);
    clearInterval(counterLine); 
    startTimer(timeValue);
    startTimerLine(widthValue); 
    timeText.textContent = "Time Left"; 
    next_btn.classList.remove("show"); //hide the next button
}

// botão de fechar quiz
quit_quiz.onclick = () => {
    window.location.reload();
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// botão de próximo
next_btn.onclick = () => {
    if (que_count < questions.length - 1) { 
        que_count++;
        que_numb++; 
        showQuetions(que_count);
        queCounter(que_numb);
        clearInterval(counter); 
        clearInterval(counterLine);
        next_btn.classList.remove("show"); 
    } else {
        clearInterval(counter); 
        clearInterval(counterLine); 
        showResult();
    }
}


function showQuetions(index) {
    const que_text = document.querySelector(".que_text");


    let que_tag = '<span>' + questions[index].numb + ". " + questions[index].question + '</span>';
    let option_tag = '<div class="option"><span>' + questions[index].options[0] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[1] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[2] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[3] + '</span></div>';
    que_text.innerHTML = que_tag; 
    option_list.innerHTML = option_tag; 

    const option = option_list.querySelectorAll(".option");


    for (i = 0; i < option.length; i++) {
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}

let tickIconTag = '<div><i class="fas fa-check"></i></div>';
let crossIconTag = '<div><i class="fas fa-times"></i></div>';


function optionSelected(answer) {
    clearInterval(counter); 
    clearInterval(counterLine); 
    let userAns = answer.textContent; 
    let correcAns = questions[que_count].answer; 
    const allOptions = option_list.children.length; 

    if (userAns == correcAns) { 
        userScore += 1;
        answer.classList.add("correct");
        answer.insertAdjacentHTML("beforeend", tickIconTag);
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    } else {
        answer.classList.add("incorrect");
        answer.insertAdjacentHTML("beforeend", crossIconTag);
        console.log("Wrong Answer");

        for (i = 0; i < allOptions; i++) {
            if (option_list.children[i].textContent == correcAns) { 
                option_list.children[i].setAttribute("class", "option correct"); 
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                console.log("Auto selected correct answer.");
            }
        }
    }
    for (i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled"); 
    }
    next_btn.classList.add("show");
}

function showResult() {
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.add("activeResult"); 
    const scoreText = result_box.querySelector(".score_text");
    const img = result_box.querySelector(".img");
    if (userScore > 3) {
        let imagem = '<img src="imgs/boa.png" height="200" width="auto">';
        let scoreTag = '<p>Parabéns, você conseguiu ' + userScore + ' de ' + questions.length + '!</p>';
        img.innerHTML = imagem;
        scoreText.innerHTML = scoreTag;
    }
    else if (userScore > 1) { 
        let imagem = '<img src="imgs/parabens.png" height="200" width="auto">';
        let scoreTag = '<p>Boa, você pontuou ' + userScore + ' de ' + questions.length + '!</p>';
        scoreText.innerHTML = scoreTag;
        img.innerHTML = imagem;
    }
    else { 
        let imagem = '<img src="imgs/que-pena.png" height="200" width="auto">';
        let scoreTag = '<p>Que pena, você pontuou apenas ' + userScore + ' de ' + questions.length + '!</p>';
        scoreText.innerHTML = scoreTag;
        img.innerHTML = imagem;
    }
}

function queCounter(index) {
    let totalQueCounTag = '<p> ' + index + ' de ' + questions.length + ' Questões</p>';
    bottom_ques_counter.innerHTML = totalQueCounTag; 
}

