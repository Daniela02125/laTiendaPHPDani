<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rincon de daniela</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="{{asset ('materialize/css/materialize.css')}}">

</head>
<body>
<nav class="light-blue accent-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">La Tienda PHP</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{url('productos')}}">Productos</a></li>
        <li><a href="{{url('cart')}}">Pedidos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
  @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js') }}"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    let tabs = document.querySelector(".tabs");
    var instance =M.tabs.init(tabs);
    //codigo de inicializacion de los select
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  });
  </script>
</body>
</html>