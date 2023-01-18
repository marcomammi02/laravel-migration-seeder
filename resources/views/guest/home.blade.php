<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <ul>
        @foreach ($trains as $train)
        <li>
            <h3>Treno {{$train->train_code}}</h3>
            <p>Compagnia: {{ $train->company }}</p>
            <p>Partenza da {{ $train->departure_station }} alle ore {{ $train->departure_time }}</p>
            <p>Arrivo a {{ $train->arrival_station }} alle ore {{ $train->arrival_time }}</p>
            <p>Numero carrozze del treno: {{ $train->n_train_carriages }}</p>
            @if ($train->in_time)
                <p>IN ORARIO</p>
            @else
                <p>IN RITARDO</p>
            @endif

            @if ($train->cancelled)
                <p>! TRENO CANCELLATO !</p>
            @endif
        </li>

        @endforeach
    </ul>
</body>
</html>
