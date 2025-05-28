<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokumentasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a class="text-xl font-bold hover:text-gray-200 transition" href="{{ route('dokumentasi.index') }}">Pusat Dokumentasi</a>
            <ul class="flex space-x-6">
                <li><a class="hover:text-gray-300 transition" href="{{ route('dokumentasi.index') }}">Beranda</a></li>
            </ul>
        </div>
    </nav>

    <header class="text-center py-12 bg-gradient-to-r from-blue-400 to-blue-600 text-white">
        <h1 class="text-4xl font-bold">Edit Dokumentasi</h1>
        <p class="text-lg mt-2 opacity-90">Perbarui dokumentasi dengan mudah</p>
    </header>

    <section class="container mx-auto my-12 px-6">
        <div class="bg-white max-w-lg mx-auto p-6 rounded-lg shadow-md border">
            <h2 class="text-center text-2xl font-semibold mb-6 text-gray-800">Edit Data Dokumentasi</h2>

            @if ($errors->any())
                <div class="bg-red-200 text-red-800 p-3 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('dokumentasi.update', $dokumen->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama', $dokumen->nama) }}"
                           class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', $dokumen->tanggal) }}"
                           class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Keterangan</label>
                    <textarea name="keterangan"
                              class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ old('keterangan', $dokumen->keterangan) }}</textarea>
                </div>
                <div class="flex justify-between">
                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        Update
                    </button>
                    <a href="{{ route('dokumentasi.index') }}"
                       class="bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-gray-600 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </section>

    <section id="kontak" class="bg-gray-200 py-12 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Kontak Kami</h2>
        <p class="mt-3 text-gray-700">Email: info@example.com | Telepon: 0812-3456-7890</p>
    </section>

    <footer class="bg-blue-600 text-white text-center py-4 mt-8">
        <p>&copy; 2025 Pusat Dokumentasi. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
