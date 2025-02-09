
@extends('layout')
@section('css')

<style>
    body {
        background: linear-gradient(to right, #FFFFFF
        , #00CC66  );
        font-family: 'Open Sans', sans-serif;
    }
    .card {
        border: none;
        border-radius: 10px;
    }
    .card-header {
        background-color: #fff;
        border-bottom: none;
        border-radius: 10px 10px 0 0;
        padding-bottom: 0;
    }
    .card-header img {
        width: 100px;
    }
    .card-body {
        padding: 2rem;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
    }
    .btn-primary {
        background: linear-gradient(to right, #00CC66, #2575fc);
        border: none;
        border-radius: 20px;
        padding: 0.75rem;
    }
    .btn-primary:hover {
        background: linear-gradient(to right, #00CC66, #00CC66);
    }
    .alert-dismissible .btn-close {
        position: absolute;
        right: 1rem;
        top: 1rem;
    }
</style>

@endsection
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="{{ asset('image/Logosmkn.jpg')}}" class="img-responsive img-body">
                                </div>
                               
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        @error('login_gagal')
                                            {{-- <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> --}}
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputEmailAddress"
                                            name="username"
                                            type="text"
                                            placeholder="Masukkan Username"/>
                                        @if($errors->has('username'))
                                        <span class="error">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputPassword"
                                            type="password"
                                            name="password"
                                            placeholder="Masukkan Password"/>
                                        @if($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                            <button class="btn w-100 btn-primary btn-block btn-login" type="submit">Login</button>
                                       
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    {{-- <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection