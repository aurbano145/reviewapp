@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h4 class="font-alt mb-0">Create new review</h4>
        <hr class="divider-w mt-10 mb-20">
        <form class="form" role="form" action="{{ url('review') }}" method="post">
          @csrf
          
          <select class="form-control" name="type" id="type" required>
            <option value="" selected disabled hidden>Select type</option>
            @foreach ($types as $index => $type)
              <option value="{{ $index }}">{{ $type }}</option>
            @endforeach
          </select>
          
          <br>
          
          <div class="form-group">
            <input class="form-control input-lg" id="title" name="title" required type="text" minlength="1" maxlength="50" value="{{ old('title') }}" placeholder="Title"/>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <br>
          
          <textarea class="form-control" name="content" id="content" required type="text" minlength="1" maxlength="300" value="{{ old('content') }}" rows="7" placeholder="Content of the review..." style="resize: none;"></textarea>
          @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <br>
          
          
          
          <button class="btn btn-success btn-round" type="submit">Confirm</button>
          <a class="btn btn-danger btn-round" href="{{ url('review') }}">Back</a>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection