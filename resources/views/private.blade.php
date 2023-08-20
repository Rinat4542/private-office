@extends('main')
@section('main')
    <h5 class="text-center">Личный кабинет</h5>
    <h5 class="text-center">Добрый пожаловать! {{auth()->user()->name}}.</h5><br>
    <h5>Создание заявки</h5>

    <div class="row mt-6">
        <form action="{{ route('private.create') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3" >
                <label for="user" class="form-label">Пользователь</label>
                <input type="user" name="user" value="{{old('user')}}" class="form-control @error('user') is-invalid @enderror" id="user">

                @error('user')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                
            </div>

            <div class="mb-3">
                <label for="topic" class="form-label">Тема</label>
                <textarea name="topic" value="{{old('topic')}}" class="form-control @error('topic') is-invalid @enderror" id="topic"></textarea>
                @error('topic')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Сообщение</label>
                <textarea name="message" value="{{old('message')}}" class="form-control @error('message') is-invalid @enderror" id="message"></textarea>
                @error('message')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Статус</label>
                <textarea name="status" value="{{old('status')}}" class="form-control @error('status') is-invalid @enderror" id="status"></textarea>
                @error('status')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>

@endsection

