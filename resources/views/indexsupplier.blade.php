<!-- resources/views/supplier/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supplier</title>
</head>
<body>
    <h1>Daftar Supplier</h1>
    <a href="{{ route('supplier.create') }}">Tambah Supplier</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Supplier</th>
                <th>Kontak</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->nama }}</td>
                <td>{{ $supplier->kontak }}</td>
                <td>{{ $supplier->alamat }}</td>
                <td>
                    <a href="{{ route('supplier.edit', $supplier->id) }}">Edit</a>
                    <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
