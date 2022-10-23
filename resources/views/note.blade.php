@extends('layout.templateSesudah')

@section('title', 'Note')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container text-center">
        <div class="row align-items-center" style="margin-top: 30px">
            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-light text-decoration-underline">Tugas Pem. Mob.</h4>
                        <p class="card-text text-light">Pribadi : Membuat aplikasi mobile CRUD menggunakan flutter. Upload ke github dan buat video...</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-light text-decoration-underline">Resep Nasi Goreng</h4>
                        <p class="card-text text-light">Untuk 1 membuat 1 porsi nasi goreng siapkan 2 buah bawang merah, 3 buah bawang putih...</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-light text-decoration-underline">Tugas Pem. Web.</h4>
                        <p class="card-text text-light">Pribadi : Membuat website statis minimal 5 halaman menggunakan bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-light text-decoration-underline">Cara upload ke github</h4>
                        <p class="card-text text-light">inisialisasi git dulu "git init". Lalu add file "git add .". Lalu commit "git commit -m "pesan"</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-light text-decoration-underline">Cara bermain LOL</h4>
                        <p class="card-text text-light">download lol. install lol. main gas langung ranked. hancurkan semuanya</p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 15px">
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('images/add.png') }}" alt="" width="105" height="105" onclick="location.href='{{url('addNote')}}'">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection