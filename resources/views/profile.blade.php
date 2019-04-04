@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User profile</h2>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ auth()->user()->name }}</h5>
                    <p class="card-text">{{ auth()->user()->email }}</p>
                    @if(auth()->user()->avatar)
                        <img style="width:200px; display:block; margin: 1rem auto;" src="{{ asset(str_replace('public/', 'storage/', auth()->user()->avatar)) }}" alt="{{ auth()->user()->name }}">
                    @else
                        <p>Add avatar</p>
                        <form method="POST" action="{{ route('profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="avatar" id="avatarfile" aria-describedby="avatarfilehelp">
                                <small id="avatarfilehelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
