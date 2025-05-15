<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>all my blogs</h1>
  <a href="{{route('blogs.create')}}">Create a new blog</a>

  @foreach($blogs as $blog)
  <h2>{{$blog->title}}</h2>
  <p>{{$blog->content}}</p>
  <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

  <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
    @csrf
    @method('DELETE')

    <button type="submit" onclick="return confirm('Are you about deleting this blog')">Delete</button>
  </form>
  @endforeach

</body>
</html>