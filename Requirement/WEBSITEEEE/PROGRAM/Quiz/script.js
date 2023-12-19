//References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 31;
let countdown;
//Questions and Options array
const quizArray = [{
        id: "0",
        question: "Berat badan 10 siswa dalam satuan kg adalah sebagai berikut: 32, 36, 37, 33, 38, 39, 37, 37, 36, 35. Rata-rata berat badan dari siswa tersebut adalah?",
        options: ["34", "35", "36", "37"],
        correct: "37",
    },
    {
        id: "1",
        question: "Median dari data 55, 57,53, 58, 59, 57,57,56, 52, 56 adalah?",
        options: ["56", "56.5", "57", "57.5"],
        correct: "56.5",
    },
    {
        id: "2",
        question: "Modus data 63, 67,69, 68, 63, 67, 67,66, 66, 65 adalah?",
        options: ["63", "65", "66", "67"],
        correct: "67",
    },
    {
        id: "3",
        question: "Rata-rata 6 buah bilangan 68 dan rata-rata 14 buah bilangan lainnya 78. Rata-rata 20 bilangan tersebut adalah?",
        options: ["78", "75", "71", "77"],
        correct: "75",
    },
    {
        id: "4",
        question: "Rata-rata nilai matematika seluruh siswa kelas 6 adalah 72. Sedangkan nilai rata-rata siswa perempuan 69 dan rata-rata nilai laki-laki 74. Jika banyak siswa dalam kelas 40 orang, banyak siswa laki-laki adalah?",
        options: ["24 orang", "20 orang", "8 orang", "4 orang"],
        correct: "24 orang",
    },
    {
        id: "5",
        question: "Berat badan rata-rata nilai 15 siswa 52 kg, sedangkan berat badan rata-rata 25 siswa wanita 48 kg. Berat badan rata-rata seluruh siswa adalah?",
        options: ["50.5 kg", "50 kg", "49.5 kg", "49 kg"],
        correct: "49.5 kg",
    },
    {
        id: "6",
        question: "Diketahui data nilai ulangan Matematika dari 15 orang siswa sebagai berikut: 7, 5, 4, 6, 5, 7, 8, 6, 4, 4, 5, 9, 5, 6, 4. Banyak siswa yang nilainya di atas rata-rata adalah?",
        options: ["4 siswa", "5 siswa", "6 siswa", "7 siswa"],
        correct: "7 siswa",
    },
    {
        id: "7",
        question: "Ibu membeli gula 8 kg, jagung 10 kg, beras 15 kg, kedelai 12 kg dan kentang 5 kg. Berat rata-rata belanjaan ibu adalah?",
        options: ["7 kg", "8 kg", "9 kg", "10 kg"],
        correct: "10 kg",
    },
    {
        id: "8",
        question: "Rata-rata tinggi 8 siswa adalah 170 cm dan rata-rata tinggi 12 siswa lainnya adalah 165 cm. Rata-rata tinggi seluruh siswa adalah?",
        options: ["166 cm", "166.5 cm", "167 cm", "168 cm"],
        correct: "167 cm",
    },
    {
        id: "9",
        question: "Diberikan empat bilangan a, b, c, dan d. Jika rata-rata a dan b adalah 50, rata-rata b dan c adalah 75, serta rata-rata c dan d adalah 70, rata-rata a dan d adalah?",
        options: ["35", "45", "50", "55"],
        correct: "45",
    },
];
//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});
//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 31;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);
//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};
//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};
//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
        quizContainer.appendChild(div);
    }
}
//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");
    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }
    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}
//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 31;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}
//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});
//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};