@include('components.app')
<form action="{{ route('users.login') }}" method="post">
    @csrf
    <label for="email">Почта</label>
    <input type="email" id="email" name="email">
    <br>
    <br>
    <label for="password">Пароль</label>
    <input type="text" name="password" id="password">
    <br>
    <br>
    <button>Войти</button>
</form>
