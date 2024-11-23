@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- resources/views/questions/edit.blade.php -->

@extends('layouts.app')

@section('content')
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
@endsection

