@extends ('layouts.master')

@section ('content')

  <h1>Sign in</h1>

  <form class="form-control" action="/login" method="POST">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
      <button type="submit" name="login" class="btn btn-info">Sign in</button>
    </div>

    @include ('layouts.errors')

  </form>

@endsection
