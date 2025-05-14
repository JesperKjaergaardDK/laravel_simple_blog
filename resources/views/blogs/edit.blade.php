<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Edit blog</h1>

  <form action="{{ route('blogs.update', $blog->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input name="title" id="title" type="text" value="{{old('title', $blog->title)}}">

    <label for="content">Content</label>
    <textarea name="content" id="content">{{old('content', $blog->content)}}</textarea>

    <button type="submit">Update</button>
  </form>
</body>

</html>