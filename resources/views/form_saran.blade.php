<x-app>
<!-- Main Content Section with Background Image -->
<div class="relative min-h-screen bg-gradient-to-br from-blue-500 to-blue-600 overflow-hidden">
    <!-- Background Abstract Shapes -->
    <div class="absolute inset-0 opacity-20">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="wave" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M0,50 Q25,25 50,50 T100,50 M0,50 Q25,75 50,50 T100,50" fill="none" stroke="#fff" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#wave)" />
        </svg>
    </div>

    <!-- Form Container -->
    <div class="container mx-auto px-4 pt-12 pb-24 relative z-10">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden flex">
            <!-- Left Side - Logo and Description -->
            <div class="w-1/2 p-8 flex flex-col justify-center items-center bg-blue-50">
                <img src="https://via.placeholder.com/150/0091AA/FFFFFF?text=JagaAir.id" alt="Logo JagaAir.id" class="mb-4">
                <p class="text-center text-gray-600 mt-2">Platform pelaporan masalah air bersih dan sanitasi untuk Kota Malang.</p>
            </div>

            <!-- Right Side - Form -->
            <div class="w-1/2 p-8">
                <h2 class="text-xl font-bold mb-6">Form Saran</h2>
                <form>
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama :</label>
                        <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Ahmad Fauzi">
                    </div>
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select id="kategori" name="kategori" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Kategori</option>
                            <option value="infrastruktur">Infrastruktur Air</option>
                            <option value="sanitasi">Sanitasi</option>
                            <option value="pelayanan">Pelayanan & Respons Petugas</option>
                            <option value="edukasi">Edukasi & Sosialisasi</option>
                            <option value="inovasi">Inovasi & Ide Baru</option>
                            <option value="sistem">Sistem & Aplikasi</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="isi_saran" class="block text-sm font-medium text-gray-700">Isi Saran :</label>
                        <textarea id="isi_saran" name="isi_saran" rows="5" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi Saran"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        KIRIM
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</x-app>
