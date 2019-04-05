@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h2>{{ $recipe->name }}</h2>
            <img style="width: 70%; margin: 1rem auto; display:block" src="{{ $recipe->image }}" class="card-img-top" alt="{{ $recipe->name }}">
            <p>
                <em>Author: {{ $recipe->user->name }}</em><br>
                Calories: <strong>{{ $recipe->calories }} kcal</strong>
            </p>
            <p>
                {!! nl2br($recipe->description) !!}
            </p>
        </div>

            {{-- @foreach($recipes as $r)
            <div class="col-4">
                <div class="card mb-4">
                    <img src="{{ $r->image }}" class="card-img-top" alt="{{ $r->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->name }}</h5>
                        <p class="card-text">{!! substr(nl2br($r->description), 0, 50) !!} ...</p>
                        <a href="#" class="btn btn-link">Read recipe</a>
                    </div>
                </div>
            </div>

            @endforeach --}}


    </div>
</div>
@endsection
