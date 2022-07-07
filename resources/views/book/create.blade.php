<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .alert {
                padding: 3px 
            }
        </style>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <h2>Kitap Ekleme</h2>
                <a style="height: 40px" class="btn btn-primary" href="{{route('book.index')}}"> Ana Sayfa</a>
            </div>
            <hr>
            <form class="mt-4" action="{{route('book.create')}}" method="POST" enctype='multipart/form-data'>
                @csrf
    
                <div class="row g-3 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Kitap adı" name="name" value="{{ old('name') }}"/>
                        @error('name')
                            <div class="alert alert-danger mt-1">
                                {{$message}}
                            </div>
                        @enderror
                        
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Yazar" name="author" value="{{ old('author') }}" />
                        @error('author')
                            <div class="alert alert-danger mt-1">
                                {{$message}}
                            </div>
                        @enderror
                        
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
                        <input type="text" class="form-control" placeholder="ISBN" name="ISBN" value="{{ old('ISBN') }}"/>
                        @error('ISBN')
                            <div class="alert alert-danger mt-1">
                                {{$message}}
                            </div>
                        @enderror
                        
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
