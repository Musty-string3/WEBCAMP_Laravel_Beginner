@extends('test.layout')

<!--メインコンテンツ-->
@section('contents')
  <h1>入力内容の確認</h1>
  email：{{ $datum['email'] }}<br>
  パスワード：{{ $datum['password'] }}<br>
@endsection
