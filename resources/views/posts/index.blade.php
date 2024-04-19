@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>
<!-- (topページ) -->
<icon type= "input" class="icon" >
{{ Form::text('username',null,['class' => 'input']) }}

<button type ="input" class="post_button" alt="投稿内容を入力してください"></button>
@endsection
