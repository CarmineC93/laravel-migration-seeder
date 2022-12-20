@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }} - {{ $train->train_code }}</li>
            @endforeach
        </ul>

        <h2>Treni in partenza oggi</h2>

        @foreach ($today_trains as $train)
            <li>{{ $train->train_code }}</li>
        @endforeach
    </div>
@endsection
