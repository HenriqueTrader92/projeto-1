<!DOCTYPE html>
<html>
    <head>
            <title>{{$title}}</title>

            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>