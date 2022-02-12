@extends('dashboard')

@section('content')


<!--Cooding-->
<form method="post" action="/schools/{{$school->id}}">
  @csrf
  @method('PATCH')

  <div class="form-group">
    <label for="name">Name</label>
    <textarea class="form-control" name="name" id="name" placeholder="{{$school->name}}" required></textarea>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="name" placeholder="{{$school->address}}" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</main>
@endsection
