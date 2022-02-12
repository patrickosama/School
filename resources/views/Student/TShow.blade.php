@extends('dashboard')

@section('content')

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">School</th>
        <th scope="col">Subject</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($vars as $var)
        <td>{{$var->id}}</td>
        <td>{{$var->name}}</td>
        <td>{{$var->age}}</td>
        <td>{{$var->school->name}}</td>
        <td>{{$var->subject}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</main>
@endsection
