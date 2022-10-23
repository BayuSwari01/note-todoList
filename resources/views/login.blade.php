@extends('layout.template')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5 bg-primary" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4">                            
                            <div class="container">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <span class="text-light">Email or username</span>
                                    </div>
                                    <div class="col">
                                        <input autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
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
                                        <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark w-100 bg-light text-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection