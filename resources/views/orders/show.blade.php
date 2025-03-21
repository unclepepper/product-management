@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Заказ #{{ $order->id }}</h1>
        <p><strong>ФИО покупателя:</strong> {{ $order->customer_name }}</p>
        <p><strong>Дата создания:</strong> {{ $order->created_at }}</p>
        <p><strong>Статус:</strong> {{ $order->status }}</p>
        <p><strong>Комментарий:</strong> {{ $order->comment }}</p>
        <p><strong>Товар:</strong> {{ $order->product->name }}</p>
        <p><strong>Цена:</strong> {{ number_format($order->product->price, 2, ',', ' ') }} руб.</p>
        @if ($order->status == 'new')
            <form action="{{ route('orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Завершить заказ</button>
            </form>
        @endif
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
