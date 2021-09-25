@extends('layouts.app')

@section('content')
  <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                             
							  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Firstname"  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							  
                           </div>
                         
						    <div class="form-group">
                              <label for="exampleInputPhone">Phone</label>
                             
							   <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                             
							   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                             
							  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
						    <div class="form-group">
                              <label for="exampleInputEmail1">Confirm Password</label>
                             
							  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="{{ route('login') }}" id="signin">{{ __('Already have an account?')}}</a></p>
                              </div>
                           </div>
                            </div>
                        </form>
                     </div>
@endsection
