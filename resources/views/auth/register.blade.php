@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-5">
        <h4 class="font-alt">Register</h4>
        <hr class="divider-w mb-10">
        <form class="form" method="POST" action="{{ route('register') }}">
          @csrf
          
          <div class="form-group">
            <input class="form-control @error('email') is-invalid @enderror" id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group">
            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name"/>
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group">
            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"/>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group">
            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"/>
          </div>
          
          <div class="form-group">
            <button class="btn btn-block btn-round btn-b" type="submit">Register</button>
          </div>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</section>
@endsection