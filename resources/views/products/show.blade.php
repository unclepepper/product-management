@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Товар: {{ $product->name }}</h1>
        <p><strong>Категория:</strong> {{ $product->category->name }}</p>
        <p><strong>Описание:</strong> {{ $product->description }}</p>
        <p><strong>Цена:</strong> {{ number_format($product->price, 2, ',', ' ') }} руб.</p>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
