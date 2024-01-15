@extends('test.layout')

<!--メインコンテンツ-->
@section('contents')
  @if ($errors->any())
    <div style="color: red;">
      @foreach ($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    </div>
  @endif
  <h1>テスト確認</h1>
  <form action="/test/input" method="post">
    @csrf
    email：<input name="email", value="{{ old('email') }}"><br>
    パスワード：<input type="password" name="password"><br>
    <button>送信する</button>
  </form>
@endsection
