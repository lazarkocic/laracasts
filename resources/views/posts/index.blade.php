
@extends ('layouts.master')

@section ('content')


    <!-- <div id="app">
      <p>@{{ name }}</p>
      <p>Static</p>
    </div> -->


    @include ('posts.post')

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>


@endsection
