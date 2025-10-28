<x-layout>
    <style>
        body {
            background-color: #121212; /* dark background */
            color: #f0f0f0;
            font-family: system-ui, sans-serif;
        }
        .auth-box {
            background-color: #1e1e1e;
            padding: 2rem;
            border-radius: 8px;
            width: 320px;
            margin: 3rem auto;
            box-shadow: 0 0 10px rgba(255 255 255 / 0.1);
        }
        .auth-box h2 {
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .auth-box input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #292929;
            color: #f0f0f0;
        }
        .auth-box ul {
            padding-left: 1rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
        }
        .auth-box button {
            width: 100%;
            padding: 0.8rem;
            background-color: #ff6b00; /* Filament orange-ish */
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .auth-box button:hover {
            background-color: #e05a00;
        }
        .toggle-btn {
            background: none;
            color: #ff6b00;
            border: none;
            cursor: pointer;
            margin-top: 1rem;
            text-decoration: none;
            font-size: 0.9rem;
        }
    </style>

    <div x-data="{ register: true }" class="auth-box" role="main" aria-label="Authentication forms">
        
        <template x-if="register">
            <section>
                <h2>Register</h2>
                <form method="POST" action="/register">
                    @csrf
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" required>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <input name="password_confirmation" type="password" placeholder="Repeat Password" required>
                    <button type="submit">Submit</button>
                </form>
                <button type="button" class="toggle-btn" @click="register = false">Already have an account? Log in</button>
            </section>
        </template>

        <template x-if="!register">
            <section>
                <h2>Login</h2>
                <form method="POST" action="/login">
                    @csrf
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <button type="submit">Submit</button>
                </form>
                <button type="button" class="toggle-btn" @click="register = true">Don't have an account? Register</button>
            </section>
        </template>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-layout>
