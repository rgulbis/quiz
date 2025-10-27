<x-layout>
    <style>
        body {
            background-color: #121212;
            color: #f0f0f0;
            font-family: system-ui, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .result-box {
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 8px;
            max-width: 480px;
            margin: 3rem auto 2rem auto;
            box-shadow: 0 0 12px rgba(255 255 255 / 0.1);
        }
        h1 {
            font-weight: 700;
            margin-bottom: 1rem;
        }
        p.score {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        form {
            margin: 1rem 0;
        }
        .btn {
            background-color: #ff6b00;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1rem;
        }
        .btn:hover {
            background-color: #e05a00;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            background-color: #292929;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 0.75rem 1rem;
            color: #f0f0f0;
            border-bottom: 1px solid #444;
        }
        th {
            background-color: #3a3a3a;
            font-weight: 600;
            text-align: left;
        }
        tr:last-child td {
            border-bottom: none;
        }
        caption {
            caption-side: top;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #ff6b00;
        }
    </style>

    <div class="result-box" role="main" aria-label="Quiz result and leaderboard">
        <h1>Quiz Done</h1>
        <p class="score">{{ $score }} out of {{ $total }} correct</p>

        <form action="{{ url('/menu') }}">
            <button type="submit" class="btn">Continue</button>
        </form>

        <form action="{{ route('quiz.restart', ['table' => $table]) }}" method="GET">
            <button type="submit" class="btn">Do Quiz Again</button>
        </form>

        @if ($leaderboard && $leaderboard->count() > 0)
            <table>
                <caption>Leaderboard</caption>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaderboard as $entry)
                        <tr>
                            <td>{{ $entry->user_name }}</td>
                            <td>{{ $entry->score }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No leaderboard data available yet.</p>
        @endif
    </div>
</x-layout>
