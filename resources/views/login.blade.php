@extends('layout.template')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5 bg-primary" id="form1" style="margin-top: 100px" >
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4">                            
                            <div class="container">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <span class="text-light">Email or username</span>
                                    </div>
                                    <div class="col">
                                        <input autocomplete="off" type="text" v-model="email" class="form-control bg-secondary" style="width: 250px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="forms-inputs mb-4">
                            <div class="container">
                                <div    class="row align-items-start">
                                    <div class="col">
                                        <span class="text-light">Password</span>
                                    </div>
                                    <div class="col">
                                        <input autocomplete="off" type="password" v-model="password" class="form-control bg-secondary" style="width: 250px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark w-100 bg-light text-primary" onclick="location.href='{{url('home')}}'">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection