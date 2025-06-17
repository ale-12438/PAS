<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white text-gray-800 min-h-screen">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold text-blue-700">Daftar Buku</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow">
                    Logout
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($books as $book)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 flex flex-col overflow-hidden">
                
                    <div class="h-90 bg-gray-100 flex items-center justify-center overflow-hidden">
                        <img src="{{ $book->gambar }}">
                    </div>

                    <div class="p-4 flex-1 flex flex-col">
                        <h2 class="text-lg font-bold text-blue-600 mb-1">{{ $book->title }}</h2>
                        <p class="text-sm text-gray-600">Penulis: {{ $book->author }}</p>
                        <p class="text-sm text-gray-600 mb-3">Tahun terbit: {{ $book->year }}</p>

                        <a href="{{ route('users.books.show', $book->id) }}"  class="mt-4 text-sm text-white bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded text-center">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white p-6 rounded shadow text-center">
                    <p class="text-gray-600">Belum ada buku yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>
