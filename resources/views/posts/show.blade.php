@extends ('layouts.master')

@section ('content')


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

    <hr>

    <form action="/posts/{{ $post->id }}/comments" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <textarea name="body" class="form-control" placeholder="Write something..." required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info">Add comment</button>
      </div>
    </form>

    @include ('layouts.errors')


@endsection
