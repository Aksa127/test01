<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Login Admin</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
        </form>

        <p class="mt-4 text-sm text-center">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar di sini</a>
        </p>
    </div>

</body>
</html>
