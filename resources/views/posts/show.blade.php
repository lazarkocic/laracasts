@extends ('layouts.master')

@section ('content')

  <div class="col-sm-8 blog-main">

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    <div class="comments-list">
      <ul class="list-group">
        @foreach ($post->comments as $comment)

          <li class="list-group-item"><strong>{{ $comment->created_at->diffForHumans() }}:</strong> &nbsp {{ $comment->body }}</li>

          <!-- <div class="media">
            <p class="pull-right"><small>{{ $comment->created_at->diffForHumans() }}</small></p>

            <div class="media-body">
              <!-- <h4 class="media-heading user_name">Baltej Singh</h4>
              <p>{{ $comment->body }}</p>
              <!-- <p><small><a href="">Like</a> - <a href="">Share</a></small></p>

            </div>
          </div> -->


        @endforeach
      </ul>
    </div>

  </div><!-- /.blog-main -->

@endsection
