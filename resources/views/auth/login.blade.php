@extends('layouts.app')
@section('content')
<body>
 
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                          
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">  {{ __('Login') }}</button>
                           </div>
						   <div class="col-md-12 text-center ">
                              @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
						   @if (Route::has('register'))
                                
                                    <!--a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a-->
									<p class="text-center">Don't have account? <a href="{{ route('register') }}" id="signup">{{ __('Sign up here') }}</a></p>
                            
                            @endif
                             
                           </div>
                        </form>
                 
				</div>
			</div>
			
 



@endsection
