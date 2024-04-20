@include('components.app')
<a href="{{ route('register') }}" style="color: black;">Регистрация</a>
<br>
<br>
<a href="{{ route('login') }}" style="color: black;">Войти</a>
<br>
<br>
@guest
    Статус: Неавторизованы
@endguest
@auth
    Авторизованы
    <form action="{{ route('users.logout') }}" method="post">
        @csrf
        <button type="submit">Выйти</button>
    </form>
@endauth
