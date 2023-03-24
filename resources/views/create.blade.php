@extends('layouts.main')

@section('content')
    <h1 class="heading-title">Tambah Produk</h1>

    <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" id="name" name="name"  class="form-input">
            @error('name')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Foto Produk</label>
            <input type="file" id="image" name="image" class="form-input-file">
            @error('image')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="price" class="form-label">Harga Produk</label>
            <input type="number" id="price" name="price"  class="form-input">
            @error('price')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock" class="form-label">Stock Produk</label>
            <input type="number" id="stock" name="stock"  class="form-input">
            @error('stock')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="descriptiom" class="form-label">Deskripsi Produk</label>
            <textarea name="description" id="desscription" cols="30" rows="10" class="form-input"></textarea>
            @error('description')
                <small class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="from-group-button">
            <button type="submit" class="form-button">Tambah Produk</button>
        </div>
    </form>
@endsection