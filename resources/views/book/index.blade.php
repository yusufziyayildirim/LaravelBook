<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-light">
      <div class="container">
        <a class="navbar-brand">Kitap</a>
        <div class="d-flex gap-3">
            <a href="{{route('login')}}" type="submit" class="btn btn-outline-primary">Giriş Yap</a>    
            <a href="{{route('register')}}" type="submit" class="btn btn-outline-primary ml-2">Kayıt Ol</a>    
        </div>
      </div>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-between items-center">
            <h2>Kitaplar</h2>
            <a style="height: 40px" href="{{route('book.create')}}" class="btn btn-primary">Kitap Ekle</a>
        </div>
        <hr>
        <table class="table table-hover">
            <thead>
              <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">Kitap</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
                @if (count($books)>0)
                    @foreach ($books as $item)
                        <tr id="{{$item->id}}">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>
                                @if ($item->image)
                                    <img src="{{asset("storage/books/$item->image")}}" height="50" alt="book_image">
                                @else
                                    <img src="https://www.betascammozaik.com/images/galeriyok.png" height="50" alt="no_image">
                                @endif
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->ISBN}}</td>
                            <td>
                                <a href="{{route('book.show',['id' => $item->id])}}" class="btn btn-outline-primary" title="Görüntüle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <a href="{{route('book.edit',['id' => $item->id])}}" class="btn btn-outline-success" title="Düzenle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                <a href="{{route('book.destroy',['id' => $item->id])}}" class="btn btn-outline-danger" title="Sil">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>    
</body>
</html>