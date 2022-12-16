@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-5">
        <h4 class="font-alt">{{ __('Login') }}</h4>
        <hr class="divider-w mb-10">
        <form class="form" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password"/>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-round btn-b">Login</button>
          </div>
          @if (Route::has('password.request'))
            <div class="form-group"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
          @endif
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</section>
@endsection