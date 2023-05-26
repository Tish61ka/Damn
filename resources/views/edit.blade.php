<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Edit {{$product->title}}</title>
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
                <form action="{{ route('update') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <div>
                        <label>Название</label>
                        <input type="text" name="title" required value="{{$product->title}}">
                    </div>
                    <div>
                        <label>Цена</label>
                        <input type="text" name="price" required value="{{$product->price}}">
                    </div>
                    <div>
                        <label>Год выпуска</label>
                        <input type="text" name="year" required value="{{$product->year}}">
                    </div>
                    <div>
                        <label>Количество на складе</label>
                        <input type="text" name="count" required value="{{$product->count}}">
                    </div>
                    <div>
                        <label>Модель</label>
                        <input type="text" name="model" required value="{{$product->model}}">
                    </div>
                    <div>
                        <label>Изображение товара</label>
                        <input type="file" name="img">
                    </div>
                    <div>
                        <label>Категория</label>
                        <input type="text" name="category" required value="1" readonly>
                    </div>
                    <button type="submit">Редактировать</button>
                </form>
                <a href="/admin"><button>Отменить</button></a>
            </div>
            <div>
                @foreach($products as $product)
                <div class="item">
                    <a href="#">
                        <div>
                            <img src="{{$product->img}}" alt="No Ethernet">
                            <img src="{{$product->img}}" alt="No Ethernet">
                        </div>
                        <p>{{$product->title}}</p>
                    </a>
                    <p>{{$product->price}} &#8381;</p>
                    <a href="/edit/{{$product->id}}" class="button-hov">Редактировать</a>
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