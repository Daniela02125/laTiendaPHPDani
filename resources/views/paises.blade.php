<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Países</title>
</head>
<body>
    <h1>PAÍSES DE LA REGIÓN</h1>

    <div>
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capital</th>
                    <th scope="col">Moneda</th>
                    <th scope="col">Poblacion</th>
                    <th scope="col">Ciudades</th>

                    
                </tr>
            </thead>
            <tbody>
                @foreach($paises as $nombre => $pais)
                <tr>
                    <td rowspan ='{{ count ($pais["ciudades"]) }}'>
                        {{ $nombre }}
                    </td>
                    <td rowspan = '{{ count ($pais["ciudades"]) }}'>{{ $pais["capital"] }}</td>
                    <td rowspan = '{{ count ($pais["ciudades"]) }}'>{{ $pais["moneda"] }}</td>
                    <td rowspan = '{{ count ($pais["ciudades"]) }}'>{{ $pais["poblacion"] }} millones hab. </td>
                    @foreach($pais["ciudades"] as $ciudad)
                         <td>{{ $ciudad }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>