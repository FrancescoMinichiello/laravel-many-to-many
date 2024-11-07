@extends('layouts.app')

@section('page-title', "{{ $project->name }}")

@section('main-content')
    <h1 class="text-center text-white mb-4">{{ $project['name'] }}</h1>
    <div class="container">
        <div class="row mb-2">
            <div>
                <div class="card-body">
                    <h1 class="card-text">{{ $project['name'] }}</h1>
                    <p class="card-text"> <a href="{{ $project['link'] }}">Link:</a> </p>
                </div>
            </div>
            <a class="btn btn-secondary mb-2" href="{{ route('admin.index') }}">
                Torna indietro
            </a>
        </div>
    </div>
@endsection
