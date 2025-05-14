<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Create new blog</h1>

  <form action="{{ route('blogs.store') }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input name="title" id="title" type="text" value="{{old('title')}}">

    <label for="content">Content</label>
    <textarea name="content" id="content">{{old('content')}}</textarea>

    <button type="submit">Submit</button>

  </form>

  @if ($errors->all())
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  @endif

</body>

</html>