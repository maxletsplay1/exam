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
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="Новая" checked>
                <label class="form-check-label" for="status1">
                    Новая
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status2" value="Подтверждено">
                <label class="form-check-label" for="status2">
                    Подтвердить
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="status" id="status3" value="Отклонено">
                <label class="form-check-label" for="status3">
                    Отклонить
                </label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
        </form>
        @endif
        @endif
        <hr>

        <img src="../{{$new->path}}" alt="" srcset="">

    </div>
</div>
@endsection