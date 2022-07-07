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
            <div class="d-flex justify-content-between items-center">
                <h2>Kitap Düzenleme</h2>
                <a style="height: 40px" class="btn btn-primary" href="{{route('book.index')}}"> Ana Sayfa</a>
            </div>
            <hr>
            <form class="mt-4" action="{{route('book.edit' , ['id' => $book->id])}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="row g-3 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" value="{{$book->name}}" name="name"/>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$book->author}}" name="author"/>
                    </div>
                </div>
            
                <div class="row g-3">
                    <div class="col">
                        <input class="form-control" name="image" type="file" id="formFile">
                        @error('image')
                            <div class="alert alert-danger mt-1">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" value="{{$book->ISBN}}" name="ISBN"/>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-2">KAYDET</button>
                    </div>
                </div> 
            </form>
        </div>
    </body>
</html>
