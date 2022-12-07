<!DOCTYPE html>
<html lang="en">
<head>
    {{-- head --}}
    @include("layout.head")
    {{-- End Of head --}}
</head>
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Loading Start -->
        @component("components.loader")
            Loading....
        @endcomponent
        <!-- Loading End -->

        {{-- Navbar --}}
        @include("layout.navbar")
        {{-- End Of Navbar --}}


        
        @yield("content")
        

        {{-- footer --}}
        @include("layout.footer")
        {{-- End Of footer --}}


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    </div>

    {{-- scrip --}}
    @include("layout.script")
    {{-- End Of script --}}
    
</body>
</html>