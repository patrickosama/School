@extends('dashboard')

@section('content')

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($schools as $school)
        <td>{{$school->id}}</td>
        <td>{{$school->name}}</td>
        <td>{{$school->grade}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="container">
  <button class="btn btn-primary" type="submit">Edit</button>

</div>
</main>
@endsection
