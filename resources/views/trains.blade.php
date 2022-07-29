<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <ul>

            @foreach ($trains as $train)

                <li>{{ $train['azienda']}} - {{ $train['codice_treno']}} - 

                @if ($train['data_di_partenza'] >= date('Y-m-d') )
                    {{ $train['data_di_partenza'] }}
                @endif
                
                </li>
                
            @endforeach

        </ul>
    </div>
    
</body>
</html>