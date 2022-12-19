@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Treni</h1>

        <ul>
            @foreach ($trains as $train)
                <li> <strong>Stazione di partenza:</strong> {{ $train->departure_station }}, <strong>Stazione di
                        arrivo:</strong> {{ $train->arrival_station }}, <strong>Orario di partenza:</strong>
                    {{ $train->time_departure }}, <strong>Orario di arrivo: </strong> {{ $train->time_arrival }} </li>
            @endforeach
        </ul>
    </div>
@endsection
