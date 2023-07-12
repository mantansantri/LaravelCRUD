<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh tutorial CRUD Laravel 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Contoh tutorial CRUD Laravel 9</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('items.create') }}"> Create Item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Kode Item</th>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Merk</th>
                <th>Nama Item</th>
                <th>Keterangan</th>
                <th>Lokasi</th>
                <th>Gambar</th>
                <th>Harga Jual</th>
                <th>Waktu Update</th>
                <th>Upah Peracik</th>
                <th>Aturan Pakai</th>
                <th>Stok</th>
                <th width="280px">Action</th>
            </tr>
   
            @foreach ($items as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->kode_item }}</td>
                <td>{{ $row->jenis->name }}</td>
                <td>{{ $row->kategori->name }}</td>
                <td>{{ $row->satuan->name }}</td>
                <td>{{ $row->merk->name }}</td>
                <td>{{ $row->nama_item }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->lokasi->name }}</td>
                <td>{{ $row->gambar }}</td>
                <td>{{ $row->harga_jual }}</td>
                <td>{{ $row->waktu_update }}</td>
                <td>{{ $row->upah_peracik }}</td>
                <td>{{ $row->aturan_pakai }}</td>
                <td>{{ $row->stok }}</td>
                <td>
                    <form action="{{ route('items.destroy',$row->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('items.edit',$row->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $items->links() !!}
</body>

</html>