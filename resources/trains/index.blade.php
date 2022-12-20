@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }}</li>
                <li>{{ $train->train_code }}</li>
            @endforeach
        </ul>


        <h5>{{ $today_trains }}</h5>
    </div>
@endsection
