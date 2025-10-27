<x-layout>
    <style>
        body {
            background-color: #121212;
            color: #f0f0f0;
            font-family: system-ui, sans-serif;
            margin: 0;
            padding: 0;
        }
        .quiz-box {
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 8px;
            max-width: 400px;
            margin: 3rem auto 2rem auto;
            box-shadow: 0 0 12px rgba(255 255 255 / 0.1);
        }
        h2 {
            font-weight: 600;
            margin-bottom: 1rem;
        }
        p, label {
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        label {
            cursor: pointer;
            user-select: none;
            display: block;
        }
        input[type="radio"] {
            margin-right: 0.75rem;
            vertical-align: middle;
        }
        button {
            background-color: #ff6b00;
            border: none;
            padding: 0.8rem 1rem;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
            user-select: none;
            font-size: 1rem;
            margin-top: 1rem;
        }
        button:hover {
            background-color: #e05a00;
        }
        .progress-container {
            background-color: #292929;
            border-radius: 8px;
            overflow: hidden;
            height: 1.5em;
            box-shadow: inset 0 0 5px #000;
            margin-top: 1rem;
        }
        .progress-bar {
            height: 100%;
            background-color: #ff6b00;
            width: 0;
            transition: width 0.4s ease;
        }
        .progress-text {
            color: #f0f0f0;
            text-align: center;
            font-weight: 600;
            font-variant-numeric: tabular-nums;
            margin-top: 0.25em;
            font-size: 1rem;
        }
    </style>

    <div class="quiz-box" role="main" aria-label="Quiz question and answers">
        <h2>Question {{ $questionNumber }} of {{ $totalQuestions }}</h2>
        <p>{{ $question->question }}</p>

        <form method="POST" action="{{ url()->current() }}">
            @csrf
            @foreach ($answers as $answer)
                <label>
                    <input type="radio" name="answer" value="{{ $answer }}" required>
                    {{ $answer }}
                </label>
            @endforeach
            <button type="submit">Next</button>
        </form>

        <div class="progress-container" aria-label="Quiz progress bar">
            <div class="progress-bar" style="width: {{ (($questionNumber - 1) / $totalQuestions) * 100 }}%;"></div>
        </div>
        <div class="progress-text">{{ $questionNumber - 1 }} / {{ $totalQuestions }}</div>
    </div>
</x-layout>
