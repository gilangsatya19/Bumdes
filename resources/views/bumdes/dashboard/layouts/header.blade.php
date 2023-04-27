<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #3C4B64">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="{{asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')}}" width="200px" height="40px"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-primary mx-3 text-black fw-semibold px-4 border-0" style="background-color: #D9D9D9">Logout</button>
            </form>
        </div>
        
    </div>
</header>