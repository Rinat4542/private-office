@extends('main')
@section('main')
<div class="row mt-4">
    <form action="{{ route('register.action') }}" method="post">
        @csrf

        <div class="mb-3" >
            <label for="name" class="form-label">Имя</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
        </div>

        <div class="mb-3" >
            <label for="email" class="form-label">E-mail адрес</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
        </div>

        <div class="mb-3" >
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">

        </div>

        <div class="mb-3" >
            <label for="password_confirmation" class="form-label">Подтвердите пароль</label>
            <input type="password" name="password_confirmation" class="form-control " id="password_confirmation">
            
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
@endsection