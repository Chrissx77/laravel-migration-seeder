@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni:</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                @if ($train->orario_partenza = '2024-02-13' )

                    {{ $train->azienda }}
                    {{ $train->orario_partenza }}
                @endif
            </li>
        @endforeach
    </ul>
@endsection
