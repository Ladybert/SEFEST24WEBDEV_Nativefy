<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Layanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"],
        select,
        .btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .img-preview {
            max-width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Layanan</h2>
        <form method="POST" action="{{ route('admin.update', $service->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="service_name">Nama Layanan</label>
                <input type="text" id="service_name" name="service_name" value="{{ $service->service_name }}" required>
            </div>
            <div class="form-group">
                <label for="service_desc">Deskripsi Layanan</label>
                <textarea id="service_desc" name="service_desc" required>{{ $service->service_desc }}</textarea>
            </div>
            <div class="form-group">
                <label for="tipe_id">Tipe</label>
                <select id="tipe_id" name="tipe_id" required>
                    @foreach ($tipes as $tipe)
                        <option value="{{ $tipe->id }}" {{ $service->tipe_id == $tipe->id ? 'selected' : '' }}>
                            {{ $tipe->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select id="kategori_id" name="kategori_id" required>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ $service->kategori_id == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" id="price" name="price" value="{{ $service->price }}" required>
            </div>
            <div class="form-group">
                <label for="service_photo">Foto Layanan</label>
                @if($service->service_photo)
                    <img src="{{ asset('storage/' . $service->service_photo) }}" alt="Current Photo" class="img-preview">
                @endif
                <input type="file" id="service_photo" name="service_photo">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah foto.</small>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
