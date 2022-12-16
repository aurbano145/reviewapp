@extends('layouts.app')

@section('content')
<section class="module">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h4 class="font-alt mb-0">Create new review</h4>
        <hr class="divider-w mt-10 mb-20">
        <form class="form" role="form" action="{{ url('review/' . $review->id) }}" method="post">
          @csrf
          @method('put')
          
          <input type="hidden" id="iduser" name="iduser" value="{{ auth()->id() }}"/>
          
          <select class="form-control" name="type" id="type" required>
            <option value="" selected disabled hidden>Select type</option>
            @foreach ($types as $index => $type)
              <option value="{{ $index }}" @if($review->type == $index) selected @endif> {{ $type }}</option>
            @endforeach
          </select>
          <br>
          <div class="form-group">
            <input class="form-control input-lg" id="title" name="title" required type="text" minlength="1" maxlength="255" value="{{ old('title', $review->title) }}" placeholder="Title"/>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <br>
          <textarea class="form-control" name="content" id="content" required type="text" minlength="1" maxlength="1000" value="{{ old('content', $review->content) }}" rows="7" placeholder="Content of the review..." style="resize: none;"></textarea>
          @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <br>
          <button class="btn btn-success btn-round" type="submit">Confirm edit</button>
          <a class="btn btn-danger btn-round" href="{{ url('review') }}">Back</a>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection