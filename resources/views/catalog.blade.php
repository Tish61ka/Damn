<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/catalog.css">
    <title>Document</title>
</head>

<body>
    @include('header')
    <section class="container">
        <h1>
            Каталог
        </h1>
        <div>
            @foreach($products as $product)
            <div class="item">
                <a href="">
                    <div>
                        <img src="{{$product->img}}" alt="No Ethernet">
                        <img src="{{$product->img}}" alt="No Ethernet">
                    </div>
                    <p>{{$product->title}}</p>
                </a>
                <p>{{$product->price}} &#8381;</p>
                @auth
                <a href="/add/cart/{{$product->id}}" class="button-hov">В корзину</a>
                @endauth
            </div>
            @endforeach
        </div>
    </section>
    @include('footer')
</body>

</html>