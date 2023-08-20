@extends('main')
@section('main')
  <div class="card m-2" style="width: 60rem;">
    <div class="card-body">
      <h5 class="card-title">Пользователь: {{$application->user ?? NULL }}</h5>
      <p class="card-topic">Тема: {{$application->topic ?? NULL }}</p>
      <p class="card-message">Сообщение{{$application->message ?? NULL }}</p>
      <p class="card-status">Статус заявки: {{$application->status ?? NULL }}</p>
      <span class="card-text">Время создания: {{$application->created_at ?? NULL }}</span><br>
      <a href="{{route('app.edit', ['application'=>$application->id])}}" class="mt-2 btn btn-warning ">Внести изменения</a>
    </div>
  </div>
@endsection