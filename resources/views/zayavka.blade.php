@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Номер машины:</h2>
        <h2>{{$new->carnum}}</h2>
        <hr>
        <h2>Описание нарушения:</h2>
        <h2>{{$new->problem}}</h2>
        <hr>
        <h2>Статус заявки:</h2>
        <h2>{{$new->status}}</h2>
        @if($new->status == 'Новая')
        @if (Auth::user()->role == 'admin')
        <form action="/updateproblem" method="post">
            @CSRF
            <input type="hidden" name="id" value="{{$new->id}}">
            <input type="hidden" name="status" value="Подтверждено">
            <button type="submit" class="btn btn-success mb-3">Подтвердить</button>
        </form>
        <form action="/updateproblem" method="post">
            @CSRF
            <input type="hidden" name="id" value="{{$new->id}}">
            <input type="hidden" name="status" value="Отклонено">
            <button type="submit" class="btn btn-danger mb-3">Отклонить</button>
        </form>
        @endif
        @endif
        <hr>

        <img src="../{{$new->path}}" alt="" srcset="">

    </div>
</div>
@endsection