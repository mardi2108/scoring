@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card">
                <div class="login-box">
                  <div class="login-logo">
                    <b>Admin</b>LTE</a>
                  </div>
                  <!-- /.login-logo -->
                  <div class="card">
                    <div class="card-body login-card-body">
                      <p class="login-box-msg">Sign in to start your session</p>

                      <form action="{{ route('login') }}" method="post">
                        @csrf
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                        <div class="input-group mb-3">
                          <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="password" name="password" class="form-control" placeholder="Password">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-8">
                            <div class="icheck-primary">
                              <input type="checkbox" id="remember">
                              <label for="remember">
                                Remember Me
                              </label>
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>

                      <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                      </p>
                    </div>
                    <!-- /.login-card-body -->
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
