<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 20px;
            text-align: left;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e1e1e1;
        }

        table td button {
            padding: 5px 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        table td button:hover {
            background-color: #c0392b;
        }

        .add-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background-color: #27ae60;
        }

        .success-message {
            text-align: center;
            background-color: #2ecc71;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }

        .error-message {
            text-align: center;
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('books.create') }}" class="add-button">Tambah Buku</a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">logout</button>
        </form>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" style="color: #3498db;">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                                @csrf @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
