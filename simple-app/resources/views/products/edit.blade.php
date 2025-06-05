@extends('components.template')

@section('title', 'Update Product Page')

@section('content')
    <h1>Update Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama</label>
            <br>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $product->nama) }}" required>
        </div>
        <div>
            <label for="harga">Harga</label>
            <br>
            <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}" required>
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <br>
            <textarea rows="10" name="gambar" id="gambar" required>{{ old('gambar', $product->gambar) }}</textarea>
        </div>
        <div>
            <label for="category_id">Kategori</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ old('category_id', $category->id) }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
