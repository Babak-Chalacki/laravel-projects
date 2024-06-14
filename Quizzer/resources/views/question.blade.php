<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #b8c6cd;
            background-image: linear-gradient(315deg, #b8c6cd, 0%, #f5f7fa, 100%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            oveflow: hidden;
            margin: 0;
        }

        .quiz-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
            width: 600px;
            max-width: 95vw;
            overflow: hidden;
        }

        .quiz-header {
            padding: 4rem;
        }

        h2 {
            padding: 1rem;
            align-items: center;
            margin: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            font-size: 1.2rem;
            margin: 1rem 0;
        }

        ul li label {
            cursor: pointer;
        }

        button {
            background-color: #8e44ad;
            color: #fff;
            border: none;
            display: block;
            width: 100%;
            cursor: pointer;
            font-size: 1.1rem;
            font-family: inherit;
            padding: 1.3rem;
        }

        button:hover {
            background-color: #732d91;
        }

        button:focus {
            outline: none;
            background-color: #5e3370;
        }
    </style>
</head>

<body>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <td>{{ isset($question->text) ? $question->text : '' }}</td>
            <ul>
                @foreach ($question->answers as $answer)
                    <li>
                        <form action="/check-answer" method="POST">
                            @csrf
                            <input type="radio" name="answer" id="a" class="answer"
                                value="{{ $answer->id }}" />
                            <label for="a" id="a_text">{{ isset($answer->text) ? $answer->text : '' }}</label>
                            <input type="hidden" name="question_id" value="<?= $question->id ?>">

                    </li>
                @endforeach
                <button id="submit">Submit</button>
                </form>
            </ul>
        </div>
    </div>
    <script>
        //     const quizData = [{
        //             question: "Which language runs in a web browser ?",
        //             a: "Java",
        //             b: "C",
        //             c: "Phyton",
        //             d: "Javascript",
        //             correct: "d"
        //         },
        //         {
        //             question: "What does CSS stads for ?",
        //             a: "Central Style Sheets",
        //             b: "Cascading Style Sheets",
        //             c: "Cascading Simple Sheests",
        //             d: "Cars SUVs Sailboats",
        //             correct: "b"
        //         },
        //         {
        //             question: "What does HTML stands for ?",
        //             a: "Hypertext Markup Language",
        //             b: "Hypertext Markdown Language",
        //             c: "Hyperloop Machine Language",
        //             d: "Helicopters Terminals Machines Lamborguinis",
        //             correct: "a"
        //         },
        //         {
        //             question: "What year was Javascript launched ?",
        //             a: "1995",
        //             b: "1996",
        //             c: "1994",
        //             d: "None of the above",
        //             correct: "a"
        //         }
        //     ]

        //     const quiz = document.getElementById("quiz")
        //     const answerElements = document.querySelectorAll(".answer")
        //     const questionElement = document.getElementById("question")

        //     /* const com os elementos labels */
        //     const a_text = document.getElementById("a_text")
        //     const b_text = document.getElementById("b_text")
        //     const c_text = document.getElementById("c_text")
        //     const d_text = document.getElementById("d_text")

        //     const submitButton = document.getElementById("submit")

        //     let currentQuiz = 0
        //     let score = 0

        //     const deselectAnswer = () => {
        //         answerElements.forEach((answer) => {
        //             answer.checked = false
        //         })
        //     }

        //     const getSelected = () => {
        //         let answer
        //         answerElements.forEach((answerElement) => {
        //             if (answerElement.checked) {
        //                 answer = answerElement.id
        //             }
        //             return answer
        //         })
        //     }

        //     const loadQuiz = () => {
        //         deselectAnswer()
        //         const currentQuizData = quizData[currentQuiz]

        //         questionElement.innerText = quizData[currentQuiz]
        //         questionElement.innerText = currentQuizData.question
        //         a_text.innerText = currentQuizData.a
        //         b_text.innerText = currentQuizData.b
        //         c_text.innerText = currentQuizData.c
        //         d_text.innerText = currentQuizData.d
        //     }
        //     loadQuiz()

        //     submitButton.addEventListener('click', () => {
        //         const answer = getSelected()
        //         if (answer) {
        //             if (answer === quizData[currentQuiz].correct) {
        //                 score++
        //                 currentQuiz++
        //             }
        //             if (currentQuiz < quizData.length) {
        //                 loadQuiz()
        //             } else {
        //                 quiz.innerHTML = `
    //     <h2>You answered ${score}/${quizData.length} questions correctly</h2>
    //     <button onclick="history.go(0)">Play Again</button>
    //    `
        //                 //location.reload()
        //             }
        //         }
        //     })
    </script>
</body>

</html>
