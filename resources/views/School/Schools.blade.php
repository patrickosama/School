@extends('dashboard')

@section('content')

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($schools as $school)
        <td>{{$school->id}}</td>
        <td><a href="/schools/{{$school->id}}">{{$school->name}}</a></td>
        <td>{{$school->address}}</td>
        <td><a href="/schools/{{$school->id}}/edit">edit</a></td>
        <td>
          <form method="post" action="/schools/{{$school->id}}">
            @csrf
            @method('DELETE')
            <button>delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="container">
  <button class="btn btn-default" type="submit"><a href="/createschool">Add</a></button>

</div>
</main>
@endsection
