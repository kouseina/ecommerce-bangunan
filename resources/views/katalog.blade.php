<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog Toko Bangunan</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div cLass="container mx-auto px-4 py-8">
        <header cLass="mb-8 text-center">
            <h1 class="text-3x1 font-bold text-gray-800">Katalog Material Bangunan</h1>
            <p class="text-gray-500 mt-2">Pusat kebutuhan konstruksi dan renovasi Anda</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($produk as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover: shadow-lg transition-shadow duration-300">
                    <div class="p-5">
                        <span cLass= "text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-100 mb-2">
                            {{ $item->kategori }}
                        </span>
                        <h3 cLass="text-xl font-bold text-gray-800 mb-2">{{ $item->nama_barang }}</h3>

                        <div cLass="text-gray-600 text-sm mb-4">
                            <p>Kode: {{ $item->kode_barang }}</p>
                            <p>Sisa Stok: <span cLass="font-bold {{ $item->stok_tersedia < 50 ? 'text-red-500' : 'text-green-600' }}">
                                {{ $item->stok_tersedia }} {{ $item->satuan }}</span></p>
                        </div>

                        <div class= "flex justify-between items-center mt-4">
                            <span class="text-xl font-extrabold text-orange-600">Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}</span>
                            <button cLass="bg-gray-800 text-white px-4 py-2 rounded text-sm font-medium hover: bg-gray-700 transition">
                                Beli
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
