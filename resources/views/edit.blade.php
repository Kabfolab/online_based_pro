
<div class="container">
    <h1>Edit Question</h1>
    <form action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="question" class="form-label">Question</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $question->question }}">
        </div>
        <div class="mb-3">
            <label for="options" class="form-label">Options (comma separated)</label>
            <input type="text" class="form-control" id="options" name="options" value="{{ implode(',', $question->options) }}">
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">Answer</label>
            <input type="text" class="form-control" id="answer" name="answer" value="{{ $question->answer }}">
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Info</label>
            <input type="text" class="form-control" id="info" name="info" value="{{ $question->info }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Question</button>
    </form>
</div>

