@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список заказов</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary">Добавить заказ</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Дата создания</th>
                <th>ФИО покупателя</th>
                <th>Статус</th>
                <th>Итоговая цена</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ number_format($order->product->price, 2, ',', ' ') }} руб.</td>
                    <td>
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-info">Просмотр</a>
                        @if ($order->status == 'new')
                            <form action="{{ route('orders.update', $order) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Завершить</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
