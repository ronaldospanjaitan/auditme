@extends('auth.customRegisterView')
@section('register')
<form method="POST" action="{{ route('register') }}">
    @csrf
               <div class="form-group">
                <label for="firstName">Full Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control @error('firstName') is-invalid @enderror " placeholder="Jack">
                <input type="text" name="lastName" id="lastName" class="form-control @error('lastName') is-invalid @enderror" placeholder="Panjaitan">
                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@gmail.com" required>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="enter your passsword" required>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password-confirmm" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm Passsword" required>
                </div>
              <div class="form-group">
                <label for="companyName">Company Name</label>
                <input type="text" name="companyName" id="companyName" class="form-control @error('companyName') is-invalid @enderror" placeholder="PT. Kuliah Enggan DO Tidak Mau">
                @error('companyName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="companyName">Company Address</label>
                <input type="text" name="companyAddress" id="companyAddress" class="form-control @error('companyAddress') is-invalid @enderror" placeholder="Jl. Dimana mana hatiku senang">
                @error('companyAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <input name="register" id="register" class=" btn-block btn btn-outline-danger" type="submit" value="Register">
            </form>
@endsection