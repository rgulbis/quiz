<x-layout>
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #f0f0f0;
            font-family: system-ui, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 2rem auto;
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 12px rgba(255 255 255 / 0.1);
        }
        select, button {
            width: 100%;
            padding: 0.6rem;
            margin-top: 1rem;
            border-radius: 4px;
            border: 1px solid #444;
            background-color: #292929;
            color: #f0f0f0;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
        }
        button:hover {
            background-color: #ff6b00;
            border-color: #ff6b00;
        }
        form {
            margin-top: 0;
        }
        table {
            width: 100%;
            margin-top: 1.5rem;
            border-collapse: collapse;
        }
        th, td {
            border-bottom: 1px solid #444;
            padding: 0.5rem;
            text-align: left;
        }
        th {
            background-color: #292929;
            font-weight: 700;
        }
        caption {
            caption-side: top;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #ff6b00;
            text-align: center;
        }
        .no-data {
            margin-top: 1rem;
            font-style: italic;
            color: #888;
            text-align: center;
        }
    </style>

    <div class="container">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

        @if(session('error'))
            <script>
                alert(@json(session('error')));
            </script>
        @endif

        <form id="quiz-select-form" method="POST" action="/quiz">
            @csrf
            <select name="topic_table_name" id="quiz-select" required>
                <option value="">Select a topic</option>
                @foreach ($topics as $topic)
                    <option value="{{ $topic->table_name }}">{{ $topic->topic_name }}</option>
                @endforeach
            </select>
            <button type="submit">Start</button>
        </form>

        <div id="leaderboard-container">
            <p class="no-data">Select a quiz topic to view leaderboard.</p>
        </div>
    </div>

    <script>
        let leaderboardContainer = document.getElementById('leaderboard-container');
        let quizSelect = document.getElementById('quiz-select');

        quizSelect.addEventListener('change', function () {
            let tableName = this.value;
            if (!tableName) {
                leaderboardContainer.innerHTML = '<p class="no-data">Select a quiz topic to view leaderboard.</p>';
                return;
            }

            fetch(`/leaderboard/${tableName}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        leaderboardContainer.innerHTML = '<p class="no-data">No leaderboard data available for this quiz.</p>';
                        return;
                    }

                    let html = '<table><caption>Leaderboard</caption><thead><tr><th>User</th><th>Score</th></tr></thead><tbody>';
                    data.forEach(entry => {
                        html += `<tr><td>${entry.user_name}</td><td>${entry.score}</td></tr>`;
                    });
                    html += '</tbody></table>';

                    leaderboardContainer.innerHTML = html;
                })
                .catch(err => {
                    leaderboardContainer.innerHTML = '<p class="no-data">Error loading leaderboard data.</p>';
                });
        });
    </script>
</x-layout>
