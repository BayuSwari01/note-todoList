@extends('layout.templateSesudah')

@section('title', 'Todo List')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container" style="margin-top: 20px">
        <table class="table text-light">
            <thead>
              <tr>
                <th scope="col" colspan="2">Senin 24-11-2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tugas Pemrograman Mobile</td>
                <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
              </tr>
              <tr>
                <td>Tugas Pemrograman Web</td>
                <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
              </tr>
              <tr>
                <td>Olahraga</td>
                <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
              </tr>
            </tbody>
            <thead>
                <tr>
                  <th scope="col" colspan="2">Selasa 25-11-2022</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td>Tugas Big Data</td>
                  <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
                </tr>
                <tr>
                  <td>Main Game</td>
                  <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                  <th scope="col" colspan="2">Rabu 26-11-2022</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td>Jogging</td>
                  <td><button class="btn btn-dark bg-light text-primary">selesai</button></td>
                </tr>
            </tbody>
        </table>
        <div class="containter">
            <button class="btn btn-dark bg-light text-primary position-absolute top-50 end-0 translate-middle-y" style="margin-top: 250px; margin-right: 125px" onclick="location.href='{{url('addTodoList')}}'">Tambah</button>
        </div>
    </div>
@endsection