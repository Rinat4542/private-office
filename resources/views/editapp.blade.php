@extends('main')
@section('main')
    <div class="row mt-4">
        <form action="{{ route('app.update', ['application' =>$application->id]) }}" method="post">
            @csrf
            <div class="mb-3" >
                <input type="user" name="user" class="form-control" id="user" placeholder="Редактировать пользователя">
            </div>

            <div class="mb-3" >
                <input type="topic" name="topic" class="form-control" id="topic" placeholder="Редактировать тему">
            </div>

            <div class="mb-3" >
                <input type="message" name="message" class="form-control" id="message" placeholder="Редактировать сообщение">
            </div>

            <div class="mb-3" >
                <input type="status" name="status" class="form-control" id="status" placeholder="Редактировать статус">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </form>
    </div>
@endsection