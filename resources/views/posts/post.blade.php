@foreach ($posts as $post)
  <div class="blog-post">

    <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>

    <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} - {{ $post->user->name }} </span></p>

    <p>{{ $post->body }}</p>

  </div><!-- /.blog-post -->
@endforeach
