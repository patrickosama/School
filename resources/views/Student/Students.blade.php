@extends('dashboard')

@section('content')

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>
        <th scope="col">School</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($vars as $var)
        <td>{{$var->id}}</td>
        <td><a href="/students/{{$var->id}}">{{$var->name}}</a></td>
        <td>{{$var->grade}}</td>
        <td>{{$var->school->name}}</td>
        <td><a href="/students/{{$var->id}}/edit">edit</a>
        </td>
        <td>
          <form method="post" action="/students/{{$var->id}}">
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
  <button class="btn btn-default" type="submit"><a href="/createstudent">Add</a></button>

</div>
</main>
@endsection
