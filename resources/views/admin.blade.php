<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>

<body>
    <header class="container">
        <p>sshoes</p>
        <a href="/logout">Выход</a>
    </header>
    <section class="container">
        <h1>Админ Панель</h1>
        <div class="edit-product">
            <div>
                <form action="{{ route('create') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div>
                        <label>Название</label>
                        <input type="text" name="title" required>
                    </div>
                    <div>
                        <label>Цена</label>
                        <input type="text" name="price" required>
                    </div>
                    <div>
                        <label>Год выпуска</label>
                        <input type="text" name="year" required>
                    </div>
                    <div>
                        <label>Количество на складе</label>
                        <input type="text" name="count" required>
                    </div>
                    <div>
                        <label>Модель</label>
                        <input type="text" name="model" required>
                    </div>
                    <div>
                        <label>Изображение товара</label>
                        <input type="file" required>
                    </div>
                    <div>
                        <label>Категория</label>
                        <input type="text" name="category" required>
                    </div>
                    <button type="submit">Создать</button>
                </form>
            </div>
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
                    <a href="#" class="button-hov">Редактировать</a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="edit-category">
            <div></div>
            <div></div>
        </div>
    </section>
</body>

</html>