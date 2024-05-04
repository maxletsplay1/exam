@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Button trigger modal -->


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
                @foreach($zayavki as $zay)
                <tr>
                    <th scope="row">{{ $zay->id}}</th>
                    <td>{{ $zay->carnum}}</td>
                    <td>{{ $zay->problem}}</td>
                    <td><a href="/applications/{{ $zay->id}}">{{ $zay->status}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection