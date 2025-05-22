@extends('components.template')

@section('title', 'Product Page')

@section('content')

    <h1>This is the products page content.</h1>
    
    <a href="{{ route('products.create') }}">New Product</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->category->name }}</td>
                <td><img src="{{ $product->gambar }}" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
