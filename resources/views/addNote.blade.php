@extends('layout.templateSesudah')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-light" style="margin-top: 80px">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul</label>
              <input type="email" class="form-control bg-secondary" id="exampleFormControlInput1">
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="exampleFormControlTextarea1">Isi Catatan</label>
              <textarea class="form-control bg-secondary" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
            <div class="form-group" style="margin-top: 20px">
                <button type="button" class="btn btn-light">Tambah Catatan</button>
            </div>
        </form>
    </div>
@endsection