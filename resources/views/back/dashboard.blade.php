@extends('back.template')

@php
    $title = 'Dashboard';
@endphp

@section('content')
    <div class="card border border-dark">
        <div class="card-body">
            <h4 class="card-title p-0 m-0">{{ $title }}</h4>
        </div>
    </div>

    <div class="card border border-dark">
        <div class="card-body">
            <h4 class="card-title">Info</h4>
        </div>
    </div>
@endsection
