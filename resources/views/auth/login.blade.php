
@extends('layouts.app')

@section('content')
<body style="background-color:crimson;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 65px;">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6 d-none d-lg-block">
                
                <center>
                
                  <img src="{{ asset('css/ignacioV.jpg') }}"
                  style="  display: table-cell;
                  height: 300px;
                  text-align: center;
                  width: 300px;
                  vertical-align: middle;
                  margin-top: 53px;
                  margin-left: 30px;">
                </center>
                
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                  </div>
                  <form method="POST" action="{{ route('login') }}"> 
                    @csrf
                      <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                      </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      {{ __('Login') }}
                  </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ __('Forgot Your Password?') }}">Forgot Password?</a><br/>
                    <a class="small" href="{{ route('register') }}">Register here mga walang accounts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

@endsection
