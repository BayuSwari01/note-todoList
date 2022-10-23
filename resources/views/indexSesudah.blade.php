@extends('layout.templateSesudah')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="row align-items-start d-flex flex-row mb-3 align-items-stretch">
            <div class="col-sm-6 col-md-6 align-items-stretch" style="margin-top: 220px">
                <div class="text-center text-light">
                    <h1>Ayo catat</h1>
                    <p>Mari biasakan mencatat agar tidak lupa</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <img class="rounded mx-auto d-block img-fluid" src="{{ asset('images/gambar-note.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection