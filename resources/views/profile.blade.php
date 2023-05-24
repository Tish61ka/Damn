<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/profile.css">
    <title>Профиль {{Auth::user()->name}}</title>
</head>

<body>
    @include('header')
    @if(session('success'))
    <div class="success">
        <div class="container">
            <p>{{session('success')}}</p>
            <a href="">+</a>
        </div>
    </div>
    @endif
    <section class="container">
        <div class="contact">
            <h1>Контактная информация</h1>
            <p>Фамилия: {{Auth::user()->surname}}</p>
            <p>Имя: {{Auth::user()->name}}</p>
            <p>Почта: {{Auth::user()->email}}</p>
            <p>Логин: {{Auth::user()->login}}</p>
            <a href="/logout">Выход</a>
        </div>
        <div class="orders">
            <h1>Заказы</h1>
            <table>
                <thead>
                    <tr>
                        <td>Номер заказа</td>
                        <td>Дата заказа</td>
                        <td>Стоимость заказа</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Заказ №1</td>
                        <td>25.09.2003</td>
                        <td>7500 &#8381;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>

        </div>
    </section>

    @include('footer')
</body>

</html>