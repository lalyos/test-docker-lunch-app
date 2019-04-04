@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Recipes for lunch</h2>
    <div class="row">

            @foreach($recipes as $r)
            <div class="col-4">
                <div class="card mb-4">
                    <img src="{{ $r->image }}" class="card-img-top" alt="{{ $r->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->name }}</h5>
                        <p class="card-text">{!! substr(nl2br($r->description), 0, 50) !!} ...</p>
                        <a href="{{ route('recipe', ['id'=>$r->id]) }}" class="btn btn-link">Read recipe</a>
                    </div>
                </div>
            </div>

            @endforeach


    </div>
</div>
@endsection
