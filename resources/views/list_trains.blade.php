@extends('layouts.app')

@section('title', "Train' List")

@section('content')
    <div class="container rounded-2">
            <h5>Treni in partenza oggi</h5>
            <div class="row g-3 text-center">
                @forelse ($today_trains as $train)
                {{-- @dd($train) --}}
                    @include('partials._train_card')
                @empty
                <h2>Oggi non ci sono treni in partenza</h2>
                    
                @endforelse
            </div>
        </div>
@endsection
