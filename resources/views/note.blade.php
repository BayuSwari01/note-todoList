@extends('layout.templateSesudah')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-center">
        <div class="row align-items-center" style="margin-top: 30px">
            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-light">Catatan Tugas Pem. Mob.</h5>
                        <p class="card-text">Pribadi : Membuat aplikasi mobile CRUD menggunakan flutter. Upload ke github dan buat video...</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-light">Resep Nasi Goreng</h5>
                        <p class="card-text">Untuk 1 membuat 1 porsi nasi goreng siapkan 2 buah bawang merah, 3 buah bawang putih...</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-light">Catatan Tugas Pem. Web.</h5>
                        <p class="card-text">Pribadi : Membuat website statis minimal 5 halaman menggunakan bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-light">Cara upload ke github</h5>
                        <p class="card-text">inisialisasi git dulu "git init". Lalu add file "git add .". Lalu commit "git commit -m "pesan"</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-light">Cara bermain LOL</h5>
                        <p class="card-text">download lol. install lol. main gas langung ranked. hancurkan semuanya</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('images/add.png') }}" alt="" width="105" height="105">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection