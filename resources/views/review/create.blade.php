@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <h4 class="font-alt mb-0">Create new review</h4>
      <hr class="divider-w mt-10 mb-20">
      <div class="col-sm-6">
        <form class="form" role="form" action="{{ url('review') }}" method="post">
          @csrf
          
          <input type="hidden" id="iduser" name="iduser" value="{{ auth()->id() }}"/>
          
          <select class="form-control" name="type" id="type" required>
            <option value="" selected disabled hidden>Select type</option>
            @foreach ($types as $index => $type)
              <option value="{{ $index }}">{{ $type }}</option>
            @endforeach
          </select>
          
          <br>
          
          <div class="form-group">
            <input class="form-control input-lg" id="title" name="title" required type="text" minlength="1" maxlength="255" value="{{ old('title') }}" placeholder="Title"/>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <br>
          
          <textarea class="form-control" name="content" id="content" required type="text" minlength="1" maxlength="1000" value="{{ old('content') }}" rows="7" placeholder="Content of the review..." style="resize: none;"></textarea>
          @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <br>
        </form>
      </div>
      <div class="col-sm-6"></div>
    </div>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <button class="btn btn-success btn-round btn-lg" type="submit">Confirm</button>
        <a class="btn btn-danger btn-round" href="{{ url('review') }}">Back</a>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</section>
@endsection