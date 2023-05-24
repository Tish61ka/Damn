<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/item.css">
    <title>Страница товара</title>
</head>

<body>
    @include('header')
    <section class="container">
        <div>
            <img src="{{$product->img}}" alt="">
            <img src="{{$product->img}}" alt="">
        </div>
        <div class="info_product">
            <div>
                <h1>{{$product->title}}</h1>
                <p>В наличии: <b>{{$product->count}} шт.</b></p>
                <p>Модель: <b>{{$product->model}}</b> </p>
                <h2>{{$product->price}} руб</h2>
                @auth
                @if($product->count != 0)
                <a href="/add/cart/{{$product->id}}">В корзину</a>
                @else
                <a href="#">Нет в наличии</a>
                @endif
                @endauth
                @guest
                <a href="/login">Войдите в аккаунт</a>
                @endguest
            </div>
        </div>
    </section>
    @include('footer')
    <script>
        window.addEventListener('scroll', function() {
            if (pageYOffset >= 126) {
                document.querySelector('.info_product div').style.position = "fixed";
            } else {
                document.querySelector('.info_product div').style.position = "relative";
            }
            console.log(pageYOffset);
        })
    </script>
</body>

</html>