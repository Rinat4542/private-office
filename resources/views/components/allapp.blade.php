@extends('main')
@section('main')
    <h4>Список ваших заявок</h4>

    @foreach ($applications as $application)
      <div class="card m-2" style="width: 60rem;">
        <div class="card-body">
          <h5 class="card-title">Пользователь: {{$application->user ?? NULL }}</h5>
          <p class="card-text">Тема: {{$application->topic ?? NULL }}</p>
          <p class="card-text">Сообщение: {{$application->message ?? NULL }}</p>
          <p class="card-text">Статус заявки: {{$application->status ?? NULL }}</p>
        </div>
      </div>
    @endforeach

@endsection