<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/registr.css">
    <title>Авторизация</title>
</head>

<body>
    @include('header')
    <section class="container">
        <h1>
            Регистрация
        </h1>
        <form method="post" action="{{ route('create') }}">
            @csrf
            <div>
                <label for="">Фамилия</label>
                <input type="text" name="surname" required>
            </div>
            <div>
                <label for="">Имя</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="">Отчество</label>
                <input type="text" name="patronic">
            </div>
            <div>
                <label for="">Логин</label>
                <input type="text" name="login" required>
            </div>
            <div>
                <label for="">E-mail</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="">Пароль</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label for="">Повторите пароль</label>
                <input type="password" name="confirm_password" required>
            </div>
            <div>
                <input type="checkbox" required>
                <label>Соглашаюсь на условия политики конфиденциальности</label>
            </div>
            <div>
                <button type="submit">Зарегистрироваться</button>
                <a href="/login">Уже меня есть аккаунт</a>
            </div>
        </form>
        <div>
            @if(session('error'))
            <p class="error">{{session('error')}}</p>
            @endif
        </div>
    </section>
    @include('footer')
</body>

</html>