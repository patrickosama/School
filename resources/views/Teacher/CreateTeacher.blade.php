@extends('dashboard')

@section('content')

<form method="post" action="/teachers">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <textarea class="form-control" name="name" id="name" placeholder="Name" required></textarea>
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <textarea class="form-control" name="age" id="name" placeholder="Age" required></textarea>
  </div>

  <div class="form-group">
    <label for="subject">Subject</label>
    <textarea class="form-control" name="subject" id="name" placeholder="Subject" required></textarea>
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

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</main>
@endsection
