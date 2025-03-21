@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить заказ</h1>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="full_name">ФИО покупателя</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="created_at">Дата создания</label>--}}
{{--                <input type="date" name="created_at" class="form-control" required>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="product_id">Товар</label>
                <select name="product_id" class="form-control" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Комментарий</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
