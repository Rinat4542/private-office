<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('main') }}">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('allapp.show') }}">Список заявок</a>
        </li>
      </ul>

        @if(auth()->guest())
          <a href="{{ route('login.index') }}" class="btn btn-primary m-lg-1">Войти</a>
          <a href="{{ route('register.index') }}" class="btn btn-primary m-lg-1">Зарегистрироваться</a> 
        @else
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-outline-danger" type="submit">Выйти</button>
          </form>
        @endif

      </div>
    </div>
</nav>