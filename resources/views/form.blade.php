@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Button trigger modal -->

        <!-- Modal -->

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
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</div>
@endsection