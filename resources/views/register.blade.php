@include('components.app')
<form action="{{ route('users.register') }}" method="POST">
    @csrf
    <label for="name">Иия</label>
    <input type="text" name="name" id="name">
    <br>
    <br>
    <label for="email">Почта</label>
    <input type="email" name="email" id="email">
    <br>
    <br>
    <label for="password">Пароль</label>
    <input type="text" name="password" id="password">
    <br>
    <br>
    <label for="password_confirmation">Подтверждение пароля</label>
    <input type="text" name="password_confirmation" id="password_confirmation">
    <br>
    <br>
    <button type="submit">Зарегестрироваться</button>
</form>
