@extends('layouts.app')

@section('content')
    <article class="container">
        <h1>Progetto:</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $name }}</h2>
                <p class="card-text">{{ $description }}</p>
                <a href="{{ route('admin.projects.index') }}" class="card-link">Torna alla lista</a>
                <a href="{{ route('admin.projects.index') }}" class="card-link">Another link</a>
            </div>
        </div>
    </article>
@endsection
