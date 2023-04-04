<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
        <style>
            .banner{
                height: 91vh;
                width: 170vh;
                background-size: cover;
                
                background-position: center;
                background: url('{{asset('BUMDES/assets/halaman_awal/banner.png')}}');
                
            }
            .mx10{
                margin-left: 8rem
                
            }
            .font20{
                font-size: 20px
            }
            .me10{
                margin-right: 10rem
            }
        </style>
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar navbar-expand-lg" style="background-color: #303C54;">
                <div class="container-fluid">
                    <a class="navbar-brand me-5 mx-5" style="font-size: 35px" href="/"><font color="white">SIAB</font><font color="#FFA500">Des</font></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item mx10">
                                <a class="nav-link text-white fs-5" href="/kelebihan" >Kelebihan SIAB-DES </a>
                            </li>
                            <li class="nav-item mx10">
                                <a class="nav-link text-white fs-5" href="/fitur">Fitur SIAB-DES </a>
                            </li>
                            <li class="nav-item mx10">
                                <a class="nav-link text-white fs-5" href="/caraOrder">Cara Order </a>
                            </li>
                            <li class="nav-item mx10">
                                <a class="nav-link text-white fs-5" href="/kontak">Kontak Kami</a>
                            </li>
                        </ul>
                        <form action="" class="" role="search">
                            @csrf
                            <div class="mx10"> 
                                <button class="btn btn-light mt-2 px-4 fw-semibold" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        @show
 
        <div class="">
            @yield('content')
        </div>
    </body>
</html>