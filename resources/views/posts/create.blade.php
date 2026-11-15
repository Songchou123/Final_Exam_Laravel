<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <label>Title</label>
    <input type="text" name="title" value="{{ old('title') }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <label>Category</label>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <label>Content</label>
    <textarea name="content">{{ old('content') }}</textarea>

    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Create Post</button>
</form>