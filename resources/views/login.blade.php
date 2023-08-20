@extends('main')
@section('main')
<div class="row mt-4">
    <form action="{{ route('login.action') }}" method="post">
        @csrf
        
        <div class="mb-3" >
            <label for="email" class="form-label">E-mail адрес</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="mb-3" >
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
