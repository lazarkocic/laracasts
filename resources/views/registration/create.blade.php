@extends ('layouts.master')

@section ('content')

  <div class="col-sm-8">

    <h1>Registration</h1>

    <form class="form-control" action="/register" method="POST">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm password:</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>

      <div class="form-group">
        <button type="submit" name="register" class="btn btn-info">Register</button>
      </div>

      @include ('layouts.errors')

    </form>


  </div>

@endsection
