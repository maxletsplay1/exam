@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 'user')
У вас нет прав
@else
<div class="container">
    <div class="row justify-content-center">
        <!-- Button trigger modal -->
        <h2>
            Новые заявки
        </h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Номер заявки</th>
                    <th scope="col">Номер машины</th>
                    <th scope="col">Нарушение</th>
                    <th scope="col">Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($new as $zay)
                <tr>
                    <th scope="row">{{ $zay->id}}</th>
                    <td>{{ $zay->carnum}}</td>
                    <td>{{ $zay->problem}}</td>
                    <td><a href="/zayavka/{{ $zay->id}}"> <button class="btn btn-outline-info" type="button">Открыть</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h2>
            Подтвержденные заявки
        </h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Номер заявки</th>
                    <th scope="col">Номер машины</th>
                    <th scope="col">Нарушение</th>
                    <th scope="col">Статус заявки</th>
                </tr>
            </thead>
            <tbody>
                @foreach($approved as $zay)
                <tr>
                    <th scope="row">{{ $zay->id}}</th>
                    <td>{{ $zay->carnum}}</td>
                    <td>{{ $zay->problem}}</td>
                    <td>{{ $zay->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h2>
            Отклоненные заявки
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Номер заявки</th>
                    <th scope="col">Номер машины</th>
                    <th scope="col">Нарушение</th>
                    <th scope="col">Статус заявки</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rejected as $zay)
                <tr>
                    <th scope="row">{{ $zay->id}}</th>
                    <td>{{ $zay->carnum}}</td>
                    <td>{{ $zay->problem}}</td>
                    <td>{{ $zay->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection