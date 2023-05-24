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
                <tr>
                    <td>TOPSHOP КОЖАНЫЕ БОТИЛЬОНЫ МОЛОЧНОГО ЦВЕТА</td>
                    <td>4900</td>
                    <td>
                        <div>
                            <a>+</a>
                            <p>1</p>
                            <a>-</a>
                        </div>
                    </td>
                    <td>4900</td>
                </tr>
            </tbody>
        </table>
        <button>Оформить заказ</button>
    </section>
    @include('footer')
</body>

</html>