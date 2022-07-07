<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container mt-4 w-50">
        <h3>Giriş</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                {{$errors->first()}}
            </div>
            
        @endif
        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="mail" class="form-label">Mail</label>
                <input type="text" name="email" class="form-control" id="mail" placeholder="Mail">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="pass" placeholder="Password">
              </div>
              <div class="mb-3 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">Giriş Yap</button>    
                  <a href="{{route('register')}}" type="submit" class="btn btn-primary">Kayıt Ol</a>    
              </div>
        </form>
    </div>
</body>
</html>