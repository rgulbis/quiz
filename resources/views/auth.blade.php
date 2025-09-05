<x-layout>
    <p>Register</p>
    <form method="POST" action="/register">
        @csrf
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <input name="name" type="name" placeholder="Name" value="{{ old("name") }}">
        <input name="email" type="email" placeholder="Email" value="{{ old("email") }}">
        <input name="password" type="password" placeholder="Password" value="{{ old("password") }}">
        <input name="password_confirmation" type="password" placeholder="Repeat Password">
        <button>Submit</button>
    </form>
    
    <p>Login</p>
    <form method="POST" action="/login">
        @csrf
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <input name="name" type="name" placeholder="Name" value="{{ old("name") }}">
        <input name="email" type="email" placeholder="Email" value="{{ old("email") }}">
        <input name="password" type="password" placeholder="Password">
        <button>Submit</button>
    </form>
</x-layout>