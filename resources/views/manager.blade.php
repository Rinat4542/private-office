@extends('main')
@section('main')
    <h5 class="text-center">Личный кабинет менеджера</h5>
    <h5>Список всех заявок</h5>
    @foreach ($applications as $application)
    <div class="card m-2" style="width: 60rem;">
      <div class="card-body">
        <h5 class="card-title">Пользователь: {{$application->user ?? NULL }}</h5>
        <p class="card-topic">Тема: {{$application->topic ?? NULL }}</p>
        <p class="card-message">Сообщение{{$application->message ?? NULL }}</p>
        <p class="card-status">Статус заявки: {{$application->status ?? NULL }}</p>
        <span class="card-text">Время создания: {{$application->created_at ?? NULL }}</span><br>
        <a href="{{ route('app.show', ['application' =>$application->id]) }}" class="mt-2 btn btn-primary ">Просмотреть заявку</a>
      </div>
    </div>
  @endforeach


@endsection