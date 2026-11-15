<h1>Blog Posts</h1>

<a href="{{ route('posts.create') }}">Create Post</a>

@foreach ($posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>

        <p>Author: {{ $post->user->name }}</p>

        <p>Category: {{ $post->category->name }}</p>

        <p>{{ $post->content }}</p>
    </article>
@endforeach

{{ $posts->links() }}