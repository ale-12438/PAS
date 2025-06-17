<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800 min-h-screen">

    <div class="container mx-auto px-4 py-10">
        <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline mb-6 inline-block">&larr; Kembali</a>

        <div class="bg-white shadow-md rounded-lg overflow-hidden md:flex">
            <div class="md:w-1/3 flex items-center justify-center bg-gray-100">
                <img src="{{ $book->gambar}}">
            </div>

            <div class="md:w-2/3 p-6">
                <h1 class="text-3xl font-bold text-blue-700 mb-2">{{ $book->title }}</h1>
                <p class="text-lg text-gray-700 mb-2"><strong>Penulis:</strong> {{ $book->author }}</p>
                <p class="text-lg text-gray-700 mb-4"><strong>Tahun:</strong> {{ $book->year }}</p>
                
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Deskripsi</h2>
                <p class="text-gray-700 leading-relaxed">{{ $book->description }}</p>
            </div>
        </div>
    </div>

</body>
</html>
