@extends('layouts.master')

@section('title','Result')
@section('content')
    
    <div class ="row">
    <div class ="col-md-4">

    </div>
    <div class ="col-md-4">
        <form class="form-signin" action="/result" method="post">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Result Student</h1>
        <p>Result</p>
      </div>

      <div class="form-label-group">
        <label for="inputEmail">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" >
      </div>

      <div class="form-label-group">
        <label for="inputEmail">Gender</label>
        <input type="text" name="gender" class="form-control" placeholder="Gender" >
      </div>

      <div class="form-label-group">
        <label for="inputEmail">Age</label>
        <input type="text" name="age" class="form-control" placeholder="Age" >
      </div>


      <hr>
    </form>
    </div>
    <div class ="col-md-4">

    </div>
</div>
    </div>
@endsection