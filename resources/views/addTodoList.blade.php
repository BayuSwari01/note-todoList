@extends('layout.templateSesudah')

@section('title', 'Tambah Todo List')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-light" style="margin-top: 80px">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Todo</label>
              <input type="email" class="form-control bg-secondary" id="exampleFormControlInput1">
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="exampleFormControlTextarea1">Deadline</label>
              <input type="date" class="form-control bg-secondary" id="exampleFormControlInput1">
            </div>
            <div class="form-group" style="margin-top: 20px">
                <button type="button" class="btn btn-light">Tambah Todo</button>
            </div>
        </form>
    </div>
@endsection