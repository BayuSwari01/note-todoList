@extends('layout.template')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="isi"><h1>ayo catat</h1></div>
            </div>
            <div class="col">
                <img src="{{ asset('images/gambar-note.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection