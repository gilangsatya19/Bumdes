<nav class="main-header navbar navbar-expand navbar-dark navbar-black " style="background-color: #3C4B64">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="/dashboard" class="nav-link ">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      
        <li class="nav-item">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn btn-primary mx-3 text-black fw-semibold px-4 border-0" style="background-color: #686565">Logout</button>
          </form>
        </li>
    </ul>
</nav>