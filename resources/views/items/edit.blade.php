<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Buyers Form – Tutorial CRUD Laravel 9 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Item</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('items.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('items.update',$item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Item:</strong>
                        <input type="number" name="kode_item" value="{{ $item->kode_item }}" class="form-control" placeholder="Kode Item">
                        @error('kode_item')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis:</strong>
                        <select name="jenis" id="jenis">
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}" @if ($item->jenis==$type->id)
                                selected
                                @endif>{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('jenis')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategori:</strong>
                        <select name="kategori" id="kategori">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($item->kategori==$category->id)
                                selected
                                @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Satuan:</strong>
                        <select name="satuan" id="satuan">
                            @foreach ($units as $unit)
                            <option value="{{ $unit->id }}" @if ($item->satuan==$unit->id)
                                selected
                                @endif>{{ $unit->name }}</option>
                            @endforeach
                        </select>
                        @error('satuan')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Merk:</strong>
                        <select name="merk" id="merk">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" @if ($item->merk==$brand->id)
                                selected
                                @endif>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('merk')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Item:</strong>
                        <input type="text" name="nama_item" value="{{ $item->nama_item }}" class="form-control" placeholder="Nama Item">
                        @error('nama_item')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $item->keterangan }}" class="form-control" placeholder="Keterangan">
                        @error('keterangan')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokasi:</strong>
                        <select name="lokasi" id="lokasi">
                            @foreach ($locations as $location)
                            <option value="{{ $location->id }}" @if ($item->lokasi==$location->id)
                                selected
                                @endif>{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('lokasi')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar:</strong>
                        <input type="text" name="gambar" value="{{ $item->gambar }}" class="form-control" placeholder="Gambar">
                        @error('gambar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Jual:</strong>
                        <input type="number" name="harga_jual" value="{{ $item->harga_jual }}" class="form-control" placeholder="Harga Jual">
                        @error('harga_jual')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Waktu Update:</strong>
                        <input type="date" name="waktu_update" value="{{ $item->waktu_update }}" class="form-control" placeholder="Waktu Update">
                        @error('waktu_update')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Upah Peracik:</strong>
                        <input type="number" name="upah_peracik" value="{{ $item->upah_peracik }}" class="form-control" placeholder="Upah Peracik">
                        @error('upah_peracik')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Aturan Pakai:</strong>
                        <input type="text" name="aturan_pakai" value="{{ $item->aturan_pakai }}" class="form-control" placeholder="Aturan Pakai">
                        @error('aturan_pakai')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stok:</strong>
                        <input type="number" name="stok" value="{{ $item->stok }}" class="form-control" placeholder="Stok">
                        @error('stok')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>