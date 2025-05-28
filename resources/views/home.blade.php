<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Dokumentasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a class="text-xl font-bold hover:text-gray-200 transition" href="#">Pusat Dokumentasi</a>
            <ul class="flex space-x-6">
                <li><a class="hover:text-gray-300 transition" href="#beranda">Beranda</a></li>
                {{-- <li><a class="hover:text-gray-300 transition" href="#dokumentasi">Rekap Dokumentasi</a></li> --}}
                {{-- <li><a class="hover:text-gray-300 transition" href="#kontak">Kontak</a></li> --}}
            </ul>
        </div>
    </nav>

    <header class="text-center py-12 bg-gradient-to-r from-blue-400 to-blue-600 text-white">
        <h1 class="text-4xl font-bold">Pusat Dokumentasi</h1>
        <p class="text-lg mt-2 opacity-90">Simpan & kelola dokumentasi dengan mudah</p>
    </header>

    <section id="dokumentasi" class="container mx-auto my-12 px-6">
        <h2 class="text-center text-3xl font-semibold mb-8 text-gray-800">Dokumentasi</h2>

        <!-- Form Input Dokumentasi -->
        <div class="bg-white max-w-lg mx-auto p-6 rounded-lg shadow-md border">
            <h3 class="text-xl font-bold mb-4 text-gray-700">Tambah Dokumentasi</h3>
            @if ($errors->any())
                <div class="bg-red-200 text-red-800 p-3 mb-4 rounded">
                    <ul>
                        @foreach ($errors ->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('dokumentasi.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Nama</label>
                    <input type="text" name="nama" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Keterangan</label>
                    <textarea name="keterangan" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
                </div>
                <button type="submit"

    class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md
           hover:bg-blue-700 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
    Simpan
</button>
            </form>
        </div>

        <!-- Daftar Dokumentasi -->
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @foreach($dokumentasi as $doc)
            <div class="bg-white p-6 rounded-lg shadow-lg border hover:shadow-xl transition">
                <h3 class="text-xl font-bold text-gray-800">{{ $doc->nama }}</h3>
                <p class="text-gray-500 text-sm mt-1">{{ $doc->tanggal }}</p>
                <p class="mt-3 text-gray-700">{{ $doc->keterangan }}</p>
                <div class="mt-6 flex justify-end">
                    <a href="{{ route('dokumentasi.edit', $doc->id) }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400 text-gray-900 font-semibold rounded-lg shadow-md
                              hover:bg-yellow-500 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.232 5.232l3.536 3.536M9 13h3l9-9a1.414 1.414 0 00-2-2l-9 9v3zM16 16h2a2 2 0 012 2v2H6v-2a2 2 0 012-2h2"/>
                        </svg>
                        Update >
                    </a>
                </div>
            </div>
            @endforeach
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
