
<div class="container">
    <h1>Questions</h1>
    @foreach ($questions as $question)
    <div class="card mb-4">
        <div class="card-body">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Question: {{ $question->id }}
            </span>
            <h2 class="text-lg text-grey-700 py-6">{{ $question->question }}</h2>
            @if (is_array($question->options))
                @foreach ($question->options as $option)
                <div class="py-2">
                    <input type="radio" id="option-{{ $question->id }}-{{ $loop->index }}" name="question-{{ $question->id }}" value="{{ $option }}">
                    <label for="option-{{ $question->id }}-{{ $loop->index }}">{{ $option }}</label>
                </div>
                @endforeach
                <h2 class="text-lg text-grey-700 py-6">{{ $question->answer }}</h2>
                <h2 class="text-lg text-grey-700 py-6">{{ $question->info }}</h2>
            @endif
            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

