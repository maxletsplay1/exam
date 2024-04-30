@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Создать заявку
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Новая заявка</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/addproblem" method="post" enctype="multipart/form-data">
                        @CSRF
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Номер машины</label>
                                <input type="text" name="carnum" required class="form-control" id="exampleFormControlInput1" placeholder="X 000 XX 00">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Описание нарушения</label>
                                <input type="text" name="problem" required class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput3" class="form-label">Фото нарушения</label>
                                <input type="file" name="file" accept="image/jpeg" required class="form-control" id="exampleFormControlInput3">
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                    <td><a href="/zayavka/{{ $zay->id}}">{{ $zay->status}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection