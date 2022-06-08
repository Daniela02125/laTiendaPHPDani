<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>La Tienda de PHP</title>
</head>
<body>
    <nav class="red darken-1">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">Una Tienda Humilde</a>
        <ul class="left hide-on-med-and-down">
            <li><a href="{{ url ('productos/create') }}">Productos</a></li>
            <li class="active"><a href="{{ url ('productos/') }}">Catálogo</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>

<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
    });
</script>
</body>
</html>