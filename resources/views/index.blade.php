@extends('layout')

<!--メインコンテンツ-->
@section('contents')
  <h1>ログイン</h1>
  @if ($errors->any())
    @foreach( $errors->all() as $error)
    <div style="color: red;">
       {{ $error }}<br>
    </div>
    @endforeach
  @endif
  <form action="./login" method="post">
    @csrf
    email：<input name="email", value="{{ old('email') }}"><br>
    パスワード：<input type="password" name="password"><br>
    <button>ログインする</button>
  </form>
@endsection