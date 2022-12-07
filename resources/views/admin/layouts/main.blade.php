<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.head')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.layouts.navbar')

        <div id="layoutSidenav">
            @include('admin.layouts.sidebar')

            @yield("content")
        </div>


        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
