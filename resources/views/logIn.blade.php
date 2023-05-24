<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Авторизация</title>
</head>

<body>
    @include('header')
    <section class="container">
        <h1>
            Авторизация
        </h1>
        <form method="post" action="{{ route('auth') }}">
            @csrf
            <div>
                <label for="">Логин</label>
                <input type="text" name="login" required>
            </div>
            <div>
                <label for="">Пароль</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Войти</button>
                <a href="/registration">Зарегистрироваться</a>
            </div>
        </form>
        <div>
            @if(session('success'))
            <p class="success">{{session('success')}}</p>
            @endif
        </div>
    </section>
    @include('footer')
</body>

</html>