@extends('layouts.login')

@section('content')

<div class="search">
    <!-- ここにアイコンのHTMLを挿入 -->
</div>

  <form action="/search" method="POST">
    @csrf
    <textarea name="keyword" placeholder="ユーザー名"></textarea>
    <button type="submit" class="users.search"></button>
    {{$search_word}}
  </form>

  @foreach ($users as $user)
    <td>{{ $user->username }}</td>
  @endforeach



@endsection
