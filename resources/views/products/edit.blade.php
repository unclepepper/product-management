@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать товар</h1>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select name="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
