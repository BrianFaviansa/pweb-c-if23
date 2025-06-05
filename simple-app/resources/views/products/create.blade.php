@extends('components.template')

@section('title', 'Create Product Page')

@section('content')
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <br>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="harga">Harga</label>
            <br>
            <input type="number" name="harga" id="harga" required>
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <br>
            <textarea name="gambar" id="gambar" required></textarea>
        </div>
        <div>
            <label for="category_id">Kategori</label>
            <br>
            <select name="category_id" id="category_id">
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
