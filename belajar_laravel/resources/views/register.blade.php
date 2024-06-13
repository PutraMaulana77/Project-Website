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
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <form action="{{route('proses_register')}}" method="POST" id="regForm">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Nama</label>
                                        <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Masukkan Nama" />
                                         @if ($errors->has('name'))
                                          <span class="error"> * {{ $errors->first('name') }}</span>
                                          @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputusername">Username</label>
                                        <input class="form-control py-4" id="inputusername" type="text" name="username" placeholder="Masukkan username" />
                                         @if ($errors->has('username'))
                                          <span class="error"> * {{ $errors->first('username') }}</span>
                                          @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" />
                                        @if ($errors->has('email'))
                                          <span class="error">* {{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                                        @if ($errors->has('password'))
                                          <span class="error">* {{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Daftar!</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{route('login')}}">Sudah Punya Akun? Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection