<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        @if ($errors->any())
            <ul class="mb-4 text-red-600 text-sm list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium">Nama</label>
                <input type="text" name="name" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-sm font-medium">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Daftar</button>
        </form>

        <p class="mt-4 text-sm text-center">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login di sini</a>
        </p>
    </div>

</body>
</html>
