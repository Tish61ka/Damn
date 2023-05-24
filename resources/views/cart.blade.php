<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Корзина</title>
</head>

<body>
    @php
    use App\Models\Product;
    $price = 0;
    for ($i=0; $i < count($cart); $i++) { $price +=$cart[$i]->summ;}
        @endphp
        @include('header')
        <section class="container">
            <h1>Корзина</h1>
            <table>
                <thead>
                    <tr>
                        <td>Название</td>
                        <td>Цена за 1 шт</td>
                        <td>Количество</td>
                        <td>Общая стоимость</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($cart as $products)
                    @php
                    $product = Product::find($products->id_product);
                    @endphp
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>4900</td>
                        <td>
                            <div>
                                @if($product->stok == $products->count)
                                @else
                                <a href="/add/cart/{{$product->id}}">+</a>
                                <p>{{$products->count}}</p>
                                @endif
                                <a href="/minus/cart/{{$product->id}}">-</a>
                            </div>
                        </td>
                        <td>{{$products->summ}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            @if(count($cart) == 0)
            <p class="empty">Ваша корзина пока пуста!</p>
            @endif
            <button>Оформить заказ</button>
        </section>
        @include('footer')
</body>

</html>