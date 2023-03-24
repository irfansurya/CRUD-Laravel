@extends('layouts.main')

@section('content')
    <h1 class="heading-titile">Semua Produk</h1>

    <div class="card-container">
        @foreach($products as $product)
            <a href="{{ route('products.show', $product->id) }}" class="card">
                <div class="card-img-container">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img">
                </div>

                <div class="card-details">
                    <h1 class="card-title">{{ $product->name }}</h1>
                    <div>
                        <p class="price">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="stock">{{ $product->stock }}</p>
                    </div>
                    <p class="card-descripton">{{ $product->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection