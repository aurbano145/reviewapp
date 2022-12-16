@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h4 class="font-alt mb-0">Profile</h4>
        <hr class="divider-w mt-10 mb-20">
        @if (session('status'))
          <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif
        
        {{ __('Welcome! You now can post your own reviews!') }}<br><br>
        
        <form action="{{ url('logout') }}" method="post">
          @csrf
          <input class="btn btn-danger btn-round" type="submit" value="Logout">
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
