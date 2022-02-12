@extends('dashboard')

@section('content')


<form method="post" action="/students">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <textarea class="form-control" name="name" id="name" placeholder="Name" required></textarea>
  </div>

  <div class="form-group">
    <label for="grade">Grade</label>
    <textarea class="form-control" name="grade" id="grade" placeholder="Grade" required></textarea>
  </div>

  <div class="form-group">
    <label for="school_id">School</label>
    <select class="form-control" name="school_id" id="school_id">
      @php
        $schools=\App\Models\school::all();
      @endphp

      @foreach($schools as $school)
        <option value="{{$school->id}}">{{$school->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="container">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</div>
</main>
@endsection
