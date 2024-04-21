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

<form action="posts" method="post">

  <textarea name="posts" placeholder="投稿内容を入力してください"></textarea>

  <button type="submit" class="post_button"></button>

</form>

@endsection
