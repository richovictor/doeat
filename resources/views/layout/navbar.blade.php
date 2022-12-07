<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            {{-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> --}}
            <img src="img/logo.png" alt="Logo" style="width:200px;"> 
            
        </a>
        <a href="">
            <i class="bx bx-cart bx-tada bx-md"></i>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="welcome" class="nav-item nav-link @if(request()->is('welcome')) active @endif">Home</a>
                {{-- <a href="about.html" class="nav-item nav-link">About</a> --}}
                <a href="menu" class="nav-item nav-link @if(request()->is('menu')) active @endif">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link @if(request()->is('tentang')) active @endif" dropdown-toggle" data-bs-toggle="dropdown">Perusahaan</a>
                    <div class="dropdown-menu m-0">
                        <a href="tentang" class="dropdown-item">Tentang Kami</a>
                        <a href="#" class="dropdown-item">Hubungi kami</a>
                    </div>
                </div>

                @if(!Auth::check())
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu m-0">
                        <a href="register" class="dropdown-item">Daftar</a>
                        <a href="login" class="dropdown-item">Masuk</a>
                        <a href="admin-dashboard" class="dropdown-item">Admin</a>
                    </div>
                </div>
                @else
                <a href="/logout" class="nav-item nav-link @if(request()->is('menu')) active @endif">Logout</a>
                @endif
                
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
        </div>
    </nav>
</div>