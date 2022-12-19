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

        <h2>Treni in partenza oggi 19/12/2022</h2>

        <ul>
            @foreach ($currtrains as $currtrain)
                <li><strong>Stazione di partenza:</strong> {{ $currtrain->departure_station }}, <strong>Stazione di
                        arrivo:</strong> {{ $currtrain->arrival_station }}, <strong>Orario di partenza:</strong>
                    {{ $currtrain->time_departure }}, <strong>Orario di arrivo: </strong> {{ $currtrain->time_arrival }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
