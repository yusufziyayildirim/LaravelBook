<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Laravel</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <h2>Kitap Düzenleme</h2>
                <a style="height: 40px" class="btn btn-primary" href="{{route('book.index')}}"> Ana Sayfa</a>
            </div>
            <hr>
            <div class="row">
                <div class="col-2">
                    <div class="mt-3">
                        <img src="{{asset("storage/books/$book->image")}}" height="150" alt="book_image">
                    </div>
                </div>
                <div class="col-10">
                    <div class="mt-3">
                        <input type="text" disabled class="form-control" value="{{$book->name}}" name="name"/>
                    </div>
                    <div class="mt-3">
                        <input type="text" disabled class="form-control" value="{{$book->author}}" name="author"/>
                    </div>
                    <div class="mt-3">
                        <input type="text" disabled class="form-control" value="{{$book->ISBN}}" name="ISBN"/>
                    </div>
                </div>
            </div>
           
        </div>
    </body>
</html>
