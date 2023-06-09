<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">掲示板</h1>

    <!-- スレッドの投稿フォーム -->
    <form class="mb-4" action="/comment" method="POST">
      @csrf
      <div class="mb-2">
        <label for="name" class="block font-semibold">投稿者名</label>
        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-2 py-1">
      </div>
      <div class="mb-2">
        <label for="comment" class="block font-semibold">コメント</label>
        <textarea id="comment" name="comment" class="w-full border border-gray-300 rounded px-2 py-1"></textarea>
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">投稿する</button>
    </form>

    <!-- コメント一覧 -->
    <div class="bg-white rounded-lg p-4">
      @foreach ($comments as $comment)
        <x-comment author-name="{{$comment->author_name}}" created-at="{{ $comment->created_at }}" comment="{{ $comment->body }}" />
      @endforeach
    </div>
  </div>
</body>

</html>
