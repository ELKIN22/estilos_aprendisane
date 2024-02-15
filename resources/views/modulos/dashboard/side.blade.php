@extends('layouts.app-side')

@section('migas-paginas')
    <a href="#">Dashboard</a>
    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <a href="#">Página 1</a>
    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <a href="#">Página 2</a>
    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <a href="" class="breadcrumb--active">Página actual</a>
@endsection

@section('title', 'Dashboard')
@section('sub-title', 'Dashboard')

@section('content')
    <div class="alert alert-primary show flex items-center" role="alert">
        <i data-feather="user" class="w-6 h-6 mr-2"></i>
        <span>
            ¡Bienvenido
                @auth
                    <b>{{ auth()->user()->name }}</b>
                @endauth
            a {{ config('app.name') }}!
        </span>
    </div>

    <test-component>

    </test-component>
@endsection


