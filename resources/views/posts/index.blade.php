@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。</h2> -->
<!-- (topページ) -->
<!-- <icon type= "input" class="icon" > -->
<!-- {{ Form::text('username',null,['class' => 'textarea']) }} -->

<!-- <button type ="input" class="post_button" alt="投稿内容を入力してください"></button>

<textarea id="toukou" name="toukou" placeholder="投稿内容を入力してください"></textarea> -->

<div class="icon">
    <!-- ここにアイコンのHTMLを挿入 -->
</div>

<form action="{{ route('posts') }}" method="post">
  @csrf
  <textarea name="posts" placeholder="投稿内容を入力してください"></textarea>

  <button type="submit" class="post_button"></button>

</form>

<!-- <div id=thread></div> 投稿内容-->

@foreach ($posts as $post)
<div class="post">
  <div class="post-icon">
    <img src= "{{ asset('images/'.$post->user->images) }}" class=post_img>
  </div>
  <div class="post-content">
    <p>{{ $post->user->username }}</p>
    <p>{{ $post->post }}</p>
  </div>
   <div class="post-">
      <p>{{ $post->created_at}}</p>
      <div>
        <a class=delete href="/top/{{$post->id}}/post"onclick="return confirm('この投稿を削除します。よろしいでしょうか？')"><img src="images/trash.png"></a>
        <a class=delete href="/top/{{$post->id}}/post"onclick="return confirm('この投稿を削除します。よろしいでしょうか？')"><img src="images/trash.png"></a>
    </div>
  </div>
</div>



@endforeach

@endsection
