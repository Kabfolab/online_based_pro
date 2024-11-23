<!DOCTYPE html>
<html>
<head>
    <title>Student Questions</title>
    <link rel="stylesheet" href="{{ asset('css/qz.css') }}">
        
    
</head>
<body>
    <h1>Student Questions</h1>
    <div style="margin-top:0px">Exam count Down Time In Minute And Second:
<span><centre>
<p id = "counter" style="background-color:green; color:white">5</p>
<p id = "counting" style="background-color:green; color:white">60</p>
</centre></span>
</div>

	

  <div class="quiz-container">
    <div id="quiz"></div>
  </div>
  <button id="previous">Previous Question</button>
  <button id="next">Next Question</button>
  <button id="submit">Submit Quiz</button>
  <div id="results"></div>

    
  
  
  <script>
    const data = @json($questions);
  </script>
<script src="{{ asset('js/qz.js') }}"></script>


</body>
</html>
