<!-- resources/views/register/register.blade.php -->

<!DOCTYPE html>
<html>
<head>
    
    <title>Register</title>
</head>
<body>
    <div class="container mx-auto mt-10 max-w-md">
        <h2 class="text-2xl font-bold mb-4">Register</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" class="border rounded w-full p-2" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="border rounded w-full p-2" value="{{ old('email') }}" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="border rounded w-full p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
        </form>

        <p class="mt-4 text-sm">
            Already have an account? <a href="{{ route('auth.login') }}" class="text-blue-500">Login here</a>.
        </p>
    </div>
</body>
</html>
<style>
/* Reset some default styles */
* {
    box-sizing: border-box;
}

/* Body and HTML should take full height */
html, body {
    height: 100%;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f7fa;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Form container to center the box */
.container {
    background-color: #ffffff;
    padding: 2rem 2.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Heading inside the container */
.container h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #222;
    text-align: center;
}

/* Form styles */
form {
    display: flex;
    flex-direction: column;
}

/* Each form field container */
.mb-4 {
    margin-bottom: 1.25rem;
}

/* Labels */
label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #444;
    font-size: 0.9rem;
}

/* Input fields */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 0.6rem 1rem;
    border: 1.5px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #4a90e2;
    outline: none;
    box-shadow: 0 0 8px rgba(74, 144, 226, 0.4);
}

/* Button styles */
button[type="submit"] {
    background-color: #4a90e2;
    color: white;
    padding: 0.75rem;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.25s ease;
}

button[type="submit"]:hover {
    background-color: #357ABD;
}

/* Error message styling */
.bg-red-100 {
    background-color: #ffe3e3;
    border: 1px solid #ffb3b3;
    padding: 0.75rem 1rem;
    border-radius: 6px;
    color: #d8000c;
    margin-bottom: 1rem;
}

.list-disc {
    list-style-type: disc;
    padding-left: 1.25rem;
    margin: 0;
}

/* Link below the form */
p {
    margin-top: 1.5rem;
    font-size: 0.9rem;
    text-align: center;
    color: #666;
}

p a {
    color: #4a90e2;
    text-decoration: none;
    font-weight: 600;
}

p a:hover {
    text-decoration: underline;
}

/* Responsive adjustment */
@media (max-width: 420px) {
    .container {
        padding: 1.5rem 1rem;
        max-width: 90%;
    }
}

    </style>