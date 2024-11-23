(function(){
  
  console.log(data);
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    data.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
        const answers = [];

        // and for each available answer...
        currentQuestion.options.forEach((option) => {

          // ...add an HTML radio button
          answers.push(
            `<label>
              <input type="radio" name="question${questionNumber}" value="${option}">
              ${option}
            </label>`
          );
        });

        // add this question and its answers to the output
        output.push(
          `<div class="slide">
            <div class="question"> Question ${questionNumber + 1} of ${data.length} </div>
            <div class="info"> ${currentQuestion.info} </div>
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );

    // finally, combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join('');
  }

  function showResults() {
  // Gather answer containers from our quiz
  const answerContainers = quizContainer.querySelectorAll('.answers');

  // Keep track of the user's answers and score
  
  let numCorrect = 0;
  let userAnswersArray = [];
  // For each question...
  data.forEach((currentQuestion, questionNumber) => {
    // Find the selected answer
    const answerContainer = answerContainers[questionNumber];
    const selector = `input[name=question${questionNumber}]:checked`;
    const userAnswer = (answerContainer.querySelector(selector) || {}).value;
    
    // Store the user answer in the userAnswersArray
    userAnswersArray.push({
      quest: currentQuestion.question,
      userAnswer: userAnswer,
      correcAns: currentQuestion.answer,
    })

    // If the answer is correct
    if (userAnswer === currentQuestion.answer) {
      // Add to the number of correct answers
      numCorrect++;

      // Color the answers green
      answerContainers[questionNumber].style.color = 'lightgreen';
    }
    // If the answer is wrong or blank
    else {
      // Color the answers red
      answerContainers[questionNumber].style.color = 'red';
    }
  });

  // Calculate the score
  const score = numCorrect;
  const finalResult= score / data.length * 100;

  // Display the score
  resultsContainer.innerHTML = 'Your score: ' + score + ' out of ' + data.length;

}




  function showSlide(n) {
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;
    if(currentSlide === 0){
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  // Variables
  const quizContainer = document.getElementById('quiz');
  const resultsContainer = document.getElementById('results');
  const submitButton = document.getElementById('submit');
  
  
  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById('previous');
  const nextButton = document.getElementById('next');
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners
  submitButton.addEventListener('click', showResults);
  previousButton.addEventListener('click', showPreviousSlide);
  nextButton.addEventListener('click', showNextSlide);
})();
