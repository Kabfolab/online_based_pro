<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Add BASIC5 Mathematics Questions</title>
    <link rel="stylesheet" type="text/css" href="exam.css">
</head>
<body>
<div class="realbox">
<form action="{{ route('question.store') }}" method="post">
 @csrf
<div style="text-align:center"><strong>Add BASIC5 Entrance Mathematics Questions</strong></div>
<div>
<div class="form-group col-lg-12">
 <label>Question No</label>
 <input type="text" name="question_no" class="form-control" size="2">
 </div>
 <div class="form-group col-lg-12">
 <label>Question</label>
 <textarea type="text" name="question" class="form-control" style="height:5em; width:40em"></textarea>
 </div>
 <div class="form-group col-lg-12">
 <div style="width:50%">
 <div class="form-group">
    <label>Options</label>
      </br>
    <input type="text" name="options[]" class="form-control">
    <input type="text" name="options[]" class="form-control">
    <input type="text" name="options[]" class="form-control">
    <input type="text" name="options[]" class="form-control">
</div>

 <div class="form-group col-lg-12">
 <label>Answer</label>
  </br>
 <input type="text" name="answer" class="form-control">
 </div>
 </div>
 </div>
 <div class="ipc" style="margin-left:50%">
 <textarea type="text" name="info" class="form-control" style="height:12em; width:33em">
 Put Instruction Here
 </textarea>
 </div>
<div class="form-group">
<input type="submit" name="submit1" value="Add Exam Question" class="btn btn-success">
</div>
</form>
</div>
</br>
<a href="{{ route('student.questions') }}">Fetch The Questions</a>


<script>
        @if(session('success'))
            // Display a JavaScript alert with the success message
            alert("{{ session('success') }}");
        @endif
    </script>
</body>
</html>
