@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }}</li>
            @endforeach
        </ul>

        <h5>{{ $trains_of_today }}</h5>
    </div>
@endsection
