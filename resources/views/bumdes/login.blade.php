<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="{{asset('css/sign-in.css')}}" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form>
            <div class="justify-content-center">
                <img class="mb-4" src="{{asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')}}" alt="" width="100%" height="100%">
            </div>
            
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            
            {{-- <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button> --}}
            <a href="/dashboard" class="w-100 btn btn-lg btn-primary" type="submit">Login</a>
          
        </form>
      </main>
</body>
</html>