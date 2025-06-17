<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #27ae60;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .back-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Buku</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Judul Buku</label>
                <input type="text" name="title" id="title" value="{{ $book->title }}" required>
            </div>

            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" id="author" value="{{ $book->author }}" required>
            </div>

            <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" name="year" id="year" value="{{ $book->year }}" required>
            </div>

            <div class="form-group">
                <label for="publisher">Penerbit</label>
                <input type="text" name="publisher" id="publisher" value="{{ $book->publisher }}" required>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar"  value="{{ $book->gambar }}" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input type="text" name="description"  value="{{ $book->description }}" required>
            </div>

            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>

        <div class="back-link">
            <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
        </div>
    </div>

</body>
</html>
