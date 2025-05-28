<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Input Data - Dokumentasi Kerja</title>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dokumentasi Kerja</h1>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Dokumentasi</a></li>
                <li><a href="#" class="hover:underline">Tentang</a></li>
                <li><a href="#" class="hover:underline">Kontak</a></li>
            </ul>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="container mx-auto flex-1 p-10">
        <div class="bg-white shadow-lg rounded-lg p-10">
            <h2 class="text-4xl font-bold text-blue-600 mb-6 text-center">Input Data Dokumentasi Kerja</h2>
            <form action="#" method="POST" class="space-y-6">
                <!-- Nama Lengkap -->
                <div>
                    <label for="nama_lengkap" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <!-- Tanggal -->
                <div>
                    <label for="tanggal" class="block text-gray-700 font-medium mb-2">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <!-- Jenis Aktivitas -->
                <div>
                    <label for="jenis_aktivitas" class="block text-gray-700 font-medium mb-2">Jenis Aktivitas</label>
                    <select id="jenis_aktivitas" name="jenis_aktivitas" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                        <option value="" disabled selected>Pilih Jenis Aktivitas</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Coding">Coding</option>
                        <option value="Testing">Testing</option>
                        <option value="Desain">Desain</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <!-- Deskripsi Aktivitas -->
                <div>
                    <label for="deskripsi_aktivitas" class="block text-gray-700 font-medium mb-2">Deskripsi Aktivitas</label>
                    <textarea id="deskripsi_aktivitas" name="deskripsi_aktivitas" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>
                </div>
                <!-- Status -->
                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                    <select id="status" name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dalam Proses">Dalam Proses</option>
                        <option value="Belum Dimulai">Belum Dimulai</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2025 Dokumentasi Kerja. All Rights Reserved.</p>
    </footer>
</body>
</html>
