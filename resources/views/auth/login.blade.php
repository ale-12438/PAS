<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html>
    
<head>

    <title>Login</title>
</head>
<body>

    <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="container mx-auto mt-10 max-w-md">
        <h2 class="text-2xl font-bold mb-4">Login</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('auth.login.store') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="border rounded w-full p-2" value="{{ old('email') }}" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="border rounded w-full p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        </form>

        <p class="mt-4 text-sm">
            Don't have an account? <a href="{{ route('register.index') }}" class="text-blue-500">Register here</a>.
        </p>
    </div>
</body>
</html>
<style>
/* Center the form vertically and horizontally */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 1.5rem;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    margin-top: 0.25rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
}

button[type="submit"] {
    width: 100%;
    padding: 0.75rem;
    background-color: #3b82f6;
    border: none;
    border-radius: 0.25rem;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #2563eb;
}

.text-sm a {
    color: #3b82f6;
    text-decoration: none;
}
.text-sm a:hover {
    text-decoration: underline;
}
</style>