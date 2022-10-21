@extends('layout.template')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                <img src="{{ asset('gambar-note.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection